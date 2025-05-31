<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terasmu - Riwayat Pembelian</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #A67C52;  /* Warna elemen utama */
            --secondary: #F7F3EE;  /* Warna latar utama */
            --accent: #2E2E2E;  /* Warna aksen dan teks */
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

        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 80px;
            background-color: var(--white);
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .back-btn {
            padding: 8px 16px;
            background-color: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: background-color 0.3s;
        }

        .back-btn:hover {
            background-color: #8a6543;
        }

        .header-icons {
            display: flex;
            gap: 20px;
        }

        .header-icons a {
            color: var(--text-color);
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
            color: var(--text-color);
            text-align: center;
            position: relative;
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(247, 243, 238, 0.9);
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
            color: var(--text-color);
            text-decoration: none;
        }

        .breadcrumb a:hover {
            color: var(--primary);
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
            flex: 1;
        }

        .history-title {
            font-size: 24px;
            margin-bottom: 30px;
            color: var(--accent);
        }

        /* Purchase History Cards */
        .purchase-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
        }

        .purchase-card {
            background-color: var(--white);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .purchase-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
        }

        .product-name {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--accent);
        }

        .product-price {
            font-size: 16px;
            font-weight: 500;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .payment-method {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .payment-method i {
            margin-right: 8px;
            color: var(--primary);
        }

        .order-date {
            font-size: 14px;
            color: #777;
            display: flex;
            align-items: center;
        }

        .order-date i {
            margin-right: 8px;
            color: var(--primary);
        }

        .status-badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
            margin-top: 10px;
        }

        .status-completed {
            background-color: #e6f7ee;
            color: #00a854;
        }

        .status-processing {
            background-color: #fff7e6;
            color: #fa8c16;
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

        @media (max-width: 768px) {
            header {
                padding: 20px;
            }
            
            .purchase-cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <a href="javascript:history.back()" class="back-btn">
            ← Kembali
        </a>
        <div class="header-icons">
            <a href="#"><i class="fas fa-user"></i></a>
            <a href="#"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </header>

    <!-- Banner -->
    <div class="banner">
        <div class="banner-overlay"></div>
        <div class="banner-content">
            <h1>Riwayat Pembelian</h1>
            <div class="breadcrumb">
                <a href="#">Home</a> > Riwayat Pembelian
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <h2 class="history-title">Daftar Pesanan Anda</h2>
        
        <div class="purchase-cards">
            <!-- Card 1 -->
            <div class="purchase-card">
                <img src="https://via.placeholder.com/350x200?text=Asgaard+Sofa" alt="Asgaard Sofa" class="product-image">
                <div class="card-content">
                    <h3 class="product-name">Asgaard Sofa</h3>
                    <div class="product-price">Rp 250.000</div>
                    <div class="payment-method">
                        <i class="fas fa-wallet"></i>
                        <span>DANA</span>
                    </div>
                    <div class="order-date">
                        <i class="far fa-calendar-alt"></i>
                        <span>12 Mei 2025 - 14:30</span>
                    </div>
                    <span class="status-badge status-completed">Selesai</span>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="purchase-card">
                <img src="https://via.placeholder.com/350x200?text=Meja+Makan+Kayu" alt="Meja Makan Kayu" class="product-image">
                <div class="card-content">
                    <h3 class="product-name">Meja Makan Kayu</h3>
                    <div class="product-price">Rp 1.250.000</div>
                    <div class="payment-method">
                        <i class="fas fa-credit-card"></i>
                        <span>Bank Transfer</span>
                    </div>
                    <div class="order-date">
                        <i class="far fa-calendar-alt"></i>
                        <span>5 Mei 2025 - 09:15</span>
                    </div>
                    <span class="status-badge status-completed">Selesai</span>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="purchase-card">
                <img src="https://via.placeholder.com/350x200?text=Lampu+Dinding+Modern" alt="Lampu Dinding Modern" class="product-image">
                <div class="card-content">
                    <h3 class="product-name">Lampu Dinding Modern</h3>
                    <div class="product-price">Rp 350.000</div>
                    <div class="payment-method">
                        <i class="fab fa-shopify"></i>
                        <span>ShopeePay</span>
                    </div>
                    <div class="order-date">
                        <i class="far fa-calendar-alt"></i>
                        <span>28 April 2025 - 16:45</span>
                    </div>
                    <span class="status-badge status-completed">Selesai</span>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="purchase-card">
                <img src="https://via.placeholder.com/350x200?text=Kursi+Kerja+Ergonomic" alt="Kursi Kerja Ergonomic" class="product-image">
                <div class="card-content">
                    <h3 class="product-name">Kursi Kerja Ergonomic</h3>
                    <div class="product-price">Rp 1.750.000</div>
                    <div class="payment-method">
                        <i class="fab fa-google"></i>
                        <span>GoPay</span>
                    </div>
                    <div class="order-date">
                        <i class="far fa-calendar-alt"></i>
                        <span>20 April 2025 - 11:20</span>
                    </div>
                    <span class="status-badge status-completed">Selesai</span>
                </div>
            </div>
            
            <!-- Card 5 -->
            <div class="purchase-card">
                <img src="https://via.placeholder.com/350x200?text=Lemari+Pakaian+Minimalis" alt="Lemari Pakaian Minimalis" class="product-image">
                <div class="card-content">
                    <h3 class="product-name">Lemari Pakaian Minimalis</h3>
                    <div class="product-price">Rp 2.500.000</div>
                    <div class="payment-method">
                        <i class="fas fa-mobile-alt"></i>
                        <span>OVO</span>
                    </div>
                    <div class="order-date">
                        <i class="far fa-calendar-alt"></i>
                        <span>15 April 2025 - 13:10</span>
                    </div>
                    <span class="status-badge status-completed">Selesai</span>
                </div>
            </div>
            
            <!-- Card 6 -->
            <div class="purchase-card">
                <img src="https://via.placeholder.com/350x200?text=Rak+Buku+Kayu" alt="Rak Buku Kayu" class="product-image">
                <div class="card-content">
                    <h3 class="product-name">Rak Buku Kayu</h3>
                    <div class="product-price">Rp 850.000</div>
                    <div class="payment-method">
                        <i class="fas fa-wallet"></i>
                        <span>DANA</span>
                    </div>
                    <div class="order-date">
                        <i class="far fa-calendar-alt"></i>
                        <span>10 April 2025 - 10:05</span>
                    </div>
                    <span class="status-badge status-processing">Dalam Pengiriman</span>
                </div>
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
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h3>Informasi</h3>
                <a href="#">Tentang Kami</a>
                <a href="#">Kebijakan Privasi</a>
                <a href="#">Syarat dan Ketentuan</a>
                <a href="#">Kontak</a>
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