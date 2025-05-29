<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniro - Checkout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #B88E2F;
            --secondary: #fff;
            --accent: #2c2c2c;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 80px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .back-btn {
            padding: 8px 16px;
            background-color: #B88E2F;
            color: #333;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .back-btn:hover {
            background-color: #eee;
        }

        .header-icons {
            display: flex;
            gap: 20px;
        }

        .header-icons a {
            color: #333;
            text-decoration: none;
        }

        /* Hero Banner */
        .banner {
            height: 150px;
            background-image: url('/api/placeholder/800/150');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #333;
            text-align: center;
            position: relative;
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            z-index: 1;
        }

        .banner-content {
            position: relative;
            z-index: 2;
        }

        .banner h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .breadcrumb {
            display: flex;
            gap: 10px;
        }

        .breadcrumb a {
            color: #333;
            text-decoration: none;
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
            display: flex;
            gap: 40px;
            flex: 1;
        }

        .billing-section {
            flex: 1;
        }

        .summary-section {
            flex: 1;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .form-row {
            margin-bottom: 20px;
        }

        .form-row label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-row input, .form-row select, .form-row textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 15px;
        }

        .form-row-split {
            display: flex;
            gap: 20px;
        }

        .form-row-split > div {
            flex: 1;
        }

        /* Summary Table */
        .summary-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .summary-total {
            font-weight: bold;
            font-size: 18px;
            color: #B88E2F;
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid #eee;
            display: flex;
            justify-content: space-between;
        }

        /* Payment Options */
        .payment-option {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .payment-option input {
            margin-right: 10px;
        }

        .payment-description {
            font-size: 14px;
            color: #777;
            margin-top: 5px;
            margin-left: 25px;
        }

        .place-order-btn {
            width: 100%;
            padding: 12px;
            background-color: #B88E2F;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        .privacy-notice {
            font-size: 14px;
            color: #777;
            margin-top: 20px;
            line-height: 1.5;
        }

        .privacy-notice a {
            color: #B88E2F;
            text-decoration: none;
        }

        /* Footer Styles */
        footer {
            background-color: var(--accent);
            color: var(--secondary);
            padding: 60px 0 0;
            margin-top: auto;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
            color: var(--secondary);
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: var(--primary);
        }

        .footer-column p, 
        .footer-column a {
            color: #ddd;
            margin-bottom: 15px;
            display: block;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-column a:hover {
            color: var(--primary);
            padding-left: 5px;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--secondary);
            text-decoration: none;
        }

        .footer-logo i {
            color: var(--primary);
            margin-right: 10px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            color: var(--secondary);
            background-color: rgba(255, 255, 255, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }

        .newsletter-form {
            display: flex;
            margin-top: 20px;
        }

        .newsletter-form input {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 4px 0 0 4px;
            font-size: 14px;
        }

        .newsletter-form button {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 0 20px;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .newsletter-form button:hover {
            background-color: #8a6543;
        }

        .footer-bottom {
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-bottom p {
            color: #aaa;
            font-size: 14px;
        }
        
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <a href="javascript:history.back()" class="back-btn">
            ← Kembali
        </a>
    </header>

    <!-- Banner -->
    <div class="banner">
        <div class="banner-overlay"></div>
        <div class="banner-content">
            <h1>Payment</h1>
            <div class="breadcrumb">
                <a href="#">Home</a> > Payment
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <!-- Billing Section -->
        <div class="billing-section">
            <h2>Billing details</h2>
            <form>
                <div class="form-row-split">
                    <div class="form-row">
                        <label for="first-name">Nama Depan</label>
                        <input type="text" id="first-name" required>
                    </div>
                    <div class="form-row">
                        <label for="last-name">Nama Belakang</label>
                        <input type="text" id="last-name" required>
                    </div>
                </div>
                <div class="form-row">
                    <label for="company">Alamat Lengkap</label>
                    <input type="text" id="company">
                </div>
                <div class="form-row">
                    <label for="phone">Nomor HP</label>
                    <input type="tel" id="phone" required>
                </div>
                <div class="form-row">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email" required>
                </div>
                <div class="form-row">
                    <label for="notes">Tanggal Pemesanan</label>
                    <input type="datetime-local" name="tanggal_jam">
                </div>
            </form>
        </div>

        <!-- Order Summary Section -->
        <div class="summary-section">
            <h2>Product</h2>
            <div class="summary-item">
                <div>Asgaard sofa × 1</div>
                <div>Rs. 250,000.00</div>
            </div>
            <div class="summary-item">
                <div>Subtotal</div>
                <div>Rs. 250,000.00</div>
            </div>
            <div class="summary-total">
                <div>Total</div>
                <div>Rs. 250,000.00</div>
            </div>

            <div style="margin-top: 30px;">
                <div class="payment-option">
                    <input type="radio" id="bank-transfer" name="payment" checked>
                    <label for="bank-transfer">Direct Bank Transfer</label>
                </div>
                <div class="payment-description">
                    Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                </div>

                <div class="payment-option">
                    <input type="radio" id="cash" name="payment">
                    <label for="cash">Cash On Delivery</label>
                </div>

                <div class="privacy-notice">
                    Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy</a>.
                </div>

                <button class="place-order-btn">Place order</button>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <a href="#" class="footer-logo">
                    <i class="fas fa-couch"></i>
                    Terasmu
                </a>
                <p>Temukan furnitur modern yang sempurna untuk rumah Anda.</p>
                <div class="social-links">
                    <a href="https://www.facebook.com/p/SMK-Telkom-Sidoarjo-100047190761645/?locale=id_ID"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/smktelkomsda/reels/"><i class="fab fa-instagram"></i></a>
                    <a href="https://x.com/SMKTelkomSDA"><i class="fab fa-twitter"></i></a>
                    <a href="https://id.pinterest.com/"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h3>Informasi</h3>
                <a href="{{ route('tentangkami') }}">Tentang Kami</a>
                <a href="#">Kebijakan Privasi</a>
                <a href="#">Syarat dan Ketentuan</a>
                <a href="{{ route( 'kontak')}}">Kontak</a>
            </div>

            <div class="footer-column">
                <h3>Bantuan</h3>
                <a href="#">FAQ</a>
                <a href="#">Pengembalian</a>
                <a href="#">Pengiriman</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Terasmu. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>
</html>