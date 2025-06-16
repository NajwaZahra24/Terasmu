<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terasmu - Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #A67C52;
            /* Warna elemen utama */
            --secondary: #F7F3EE;
            /* Warna latar utama */
            --accent: #2E2E2E;
            /* Warna aksen dan teks */
            --light-gray: #e0e0e0;
            --white: #ffffff;
            --text-color: #2E2E2E;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            color: var(--text-color);
            background-color: var(--secondary);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Breadcrumb */
        .breadcrumb {
            padding: 15px 0;
            background-color: var(--secondary);
            font-size: 14px;
        }

        .breadcrumb a {
            color: var(--text-color);
            text-decoration: none;
        }

        .breadcrumb a:hover {
            color: var(--primary);
        }

        .breadcrumb span {
            color: var(--primary);
            font-weight: 500;
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
            color: var(--accent);
        }

        .form-row {
            margin-bottom: 20px;
        }

        .form-row label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--accent);
        }

        .form-row input,
        .form-row select,
        .form-row textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--light-gray);
            border-radius: 4px;
            font-size: 15px;
            background-color: var(--white);
        }

        .form-row-split {
            display: flex;
            gap: 20px;
        }

        .form-row-split>div {
            flex: 1;
        }

        /* Summary Table */
        .summary-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid var(--light-gray);
            color: var(--accent);
        }

        .summary-total {
            font-weight: bold;
            font-size: 18px;
            color: var(--primary);
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid var(--light-gray);
            display: flex;
            justify-content: space-between;
        }

        /* Payment Options */
        .payment-method {
            margin: 30px 0 20px;
        }

        .payment-method label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--accent);
        }

        .payment-method select {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--light-gray);
            border-radius: 4px;
            font-size: 15px;
            background-color: var(--white);
        }

        .payment-description {
            font-size: 14px;
            color: #777;
            margin-top: 15px;
            line-height: 1.5;
        }

        .place-order-btn {
            width: 100%;
            padding: 12px;
            background-color: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        .place-order-btn:hover {
            background-color: #8a6543;
        }

        .privacy-notice {
            font-size: 14px;
            color: #777;
            margin-top: 20px;
            line-height: 1.5;
        }

        .privacy-notice a {
            color: var(--primary);
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
            transition: all 0.3s;
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
            background-color: var(--white);
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

    <!-- Breadcrumb Navigation -->
    <section class="breadcrumb">
        <div class="container">
            <a href="/">Beranda</a> &gt;
            <a href="/katalog">Katalog</a> &gt;
            <a href="/payment">Payment</a>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <!-- Billing Section -->
        <div class="billing-section">
            <h2>Detail Pembayaran</h2>
            <form action="{{ route('order.store') }}" method="POST">
                @csrf

                <div class="form-row-split">
                    <div class="form-row">
                        <label for="first-name">Nama Depan</label>
                        <input type="text" id="first-name" name="first_name" required>
                    </div>
                    <div class="form-row">
                        <label for="last-name">Nama Belakang</label>
                        <input type="text" id="last-name" name="last_name" required>
                    </div>
                </div>

                <div class="form-row">
                    <label for="company">Alamat Lengkap</label>
                    <input type="text" id="company" name="address" required>
                </div>

                <div class="form-row">
                    <label for="phone">Nomor HP</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-row">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-row">
                    <label for="notes">Tanggal Pemesanan</label>
                    <input type="date" name="order_date" required>
                </div>

                <!-- Example hidden product fields -->
                <input type="hidden" name="product_name" value="{{ $furnitur->nama }}">
                <input type="hidden" name="quantity" value="{{ $quantity }}">
                <input type="hidden" name="subtotal" value="{{ $furnitur->harga * $quantity }}">
                <input type="hidden" name="total" value="{{ $furnitur->harga * $quantity }}">

                <div class="form-row">
                    <label for="payment-method">Metode Pembayaran</label>
                    <select name="payment_method" id="payment-method" required>
                        <option value="Bank Transfer">Bank Transfer</option>
                        <option value="COD">COD</option>
                        <option value="Credit Card">Credit Card</option>
                    </select>
                </div>

                <button type="submit">Lakukan Pemesanan</button>
            </form>

        </div>

        <!-- Order Summary Section -->
        <div class="summary-section">
            <h2>Produk</h2>
            <div class="summary-item">
                <div>Asgaard sofa × 1</div>
                <div>Rp. 250,000.00</div>
            </div>
            <div class="summary-item">
                <div>Subtotal</div>
                <div>Rp. 250,000.00</div>
            </div>
            <div class="summary-total">
                <div>Total</div>
                <div>Rp. 250,000.00</div>
            </div>

            <div class="payment-method">
                <label for="payment-select">Metode Pembayaran</label>
                <select id="payment-select" name="payment">
                    <option value="bank-transfer">Bank Transfer</option>
                    <option value="dana">DANA</option>
                    <option value="ovo">OVO</option>
                    <option value="shopeepay">ShopeePay</option>
                    <option value="gopay">GoPay</option>
                    <option value="bca">BCA</option>
                    <option value="bni">BNI</option>
                    <option value="mandiri">Mandiri</option>
                </select>
                <div class="payment-description">
                    Pilih metode pembayaran yang Anda inginkan. Setelah memesan, Anda akan diarahkan ke halaman
                    pembayaran yang sesuai.
                </div>
            </div>

            <div class="privacy-notice">
                Data pribadi Anda akan digunakan untuk mendukung pengalaman Anda di seluruh situs web ini, untuk
                mengelola akses ke akun Anda, dan untuk tujuan lain yang dijelaskan dalam <a href="#">kebijakan
                    privasi</a> kami.
            </div>

            <button class="place-order-btn">Lakukan Pemesanan</button>
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
                    <a href="https://www.facebook.com/p/SMK-Telkom-Sidoarjo-100047190761645/?locale=id_ID"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/smktelkomsda/reels/"><i class="fab fa-instagram"></i></a>
                    <a href="https://x.com/SMKTelkomSDA"><i class="fab fa-twitter"></i></a>
                    <a href="https://id.pinterest.com/"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h3>Informasi</h3>
                <a href="{{ route('tentangkami') }}">Tentang Kami</a>
                <a href="{{ route('kebijakanprivasi')}}">Kebijakan Privasi</a>
                <a href="{{ route('snk')}}">Syarat dan Ketentuan</a>
                <a href="{{ route('kontak')}}">Kontak</a>
            </div>

            <div class="footer-column">
                <h3>Bantuan</h3>
                <a href="{{ route('faq') }}">FAQ</a>
                <a href="{{ route('pengembalian') }}">Pengembalian</a>
                <a href="{{ route('pengiriman') }}">Pengiriman</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Terasmu. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>

</html>