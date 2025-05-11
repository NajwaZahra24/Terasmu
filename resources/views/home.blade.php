<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terasmu - Interior Design Store</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Global Styles */
        body {
            background-color: #fff;
            color: #333;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        button {
            cursor: pointer;
            border: none;
            outline: none;
        }

        /* Header Styles */
        header {
            padding: 15px 0;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-weight: bold;
            font-size: 24px;
            color: #4a6741;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .search-container {
            display: flex;
            align-items: center;
            background-color: #f5f5f5;
            border-radius: 20px;
            padding: 5px 15px;
            width: 300px;
        }

        .search-container input {
            border: none;
            background: transparent;
            width: 100%;
            padding: 8px;
            outline: none;
        }

        .right-nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .cart-icon, .account-icon {
            font-size: 20px;
            color: #333;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 500px;
            display: flex;
            align-items: center;
            background-color: #f5f5f5;
            overflow: hidden;
        }

        .hero-content {
            position: relative;
            width: 50%;
            padding: 50px;
            z-index: 2;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 15px;
            color: #4a6741;
        }

        .hero p {
            font-size: 16px;
            margin-bottom: 30px;
            max-width: 450px;
        }

        .hero-btn {
            background-color: #4a6741;
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .hero-btn:hover {
            background-color: #3c5635;
            transform: translateY(-2px);
        }

        .hero-image {
            position: absolute;
            right: 0;
            top: 0;
            width: 65%;
            height: 100%;
            background-image: url("/api/placeholder/600/500");
            background-size: cover;
            background-position: center;
        }

        /* Features Section */
        .features {
            display: flex;
            justify-content: space-between;
            padding: 20px 0;
            background-color: #f8f5e9;
        }

        .feature {
            display: flex;
            align-items: center;
            padding: 15px;
            gap: 10px;
        }

        .feature-icon {
            width: 40px;
            height: 40px;
            background-color: #f8f5e9;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .feature-text h4 {
            font-size: 14px;
            font-weight: 600;
        }

        .feature-text p {
            font-size: 12px;
            color: #666;
        }

        /* Collection Section */
        .collection-section {
            padding: 60px 0;
            text-align: center;
        }

        .section-title {
            font-size: 24px;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .section-subtitle {
            font-size: 14px;
            color: #666;
            margin-bottom: 40px;
        }

        .collection-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .collection-item {
            position: relative;
            height: 300px;
            border-radius: 8px;
            overflow: hidden;
        }

        .collection-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .collection-item:hover img {
            transform: scale(1.05);
        }

        /* Promo Section */
        .promo-section {
            padding: 60px 0;
            background-color: #f8f5e9;
            display: flex;
            align-items: center;
        }

        .promo-content {
            width: 50%;
            padding: 30px;
        }

        .promo-content h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
        }

        .promo-content p {
            margin-bottom: 30px;
            line-height: 1.8;
        }

        .promo-btn {
            background-color: #4a6741;
            color: white;
            padding: 12px 30px;
            border-radius: 5px;
            display: inline-block;
            font-weight: 600;
        }

        .promo-image {
            width: 50%;
            padding: 30px;
            text-align: right;
        }

        .promo-image img {
            max-width: 100%;
            border-radius: 10px;
        }

        /* Products Section */
        .products-section {
            padding: 60px 0;
            text-align: center;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 30px;
        }

        .product-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            height: 200px;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-info {
            padding: 15px;
            text-align: left;
        }

        .product-category {
            font-size: 12px;
            color: #666;
            text-transform: uppercase;
        }

        .product-title {
            font-size: 16px;
            margin: 5px 0;
        }

        .product-price {
            font-weight: 600;
            font-size: 18px;
            color: #4a6741;
            margin-bottom: 10px;
        }

        .product-rating {
            display: flex;
            gap: 2px;
            color: #ffc107;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .add-to-cart {
            background-color: transparent;
            border: 1px solid #ddd;
            padding: 8px;
            border-radius: 50%;
            margin-left: auto;
            display: block;
            color: #4a6741;
        }

        /* How to Buy Section */
        .how-to-buy {
            padding: 60px 0;
            text-align: center;
            background-color: #fff;
        }

        .steps-container {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
            gap: 20px;
        }

        .step {
            flex: 1;
            position: relative;
        }

        .step-image {
            height: 200px;
            margin-bottom: 20px;
            position: relative;
            border-radius: 8px;
            overflow: hidden;
        }

        .step-number {
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 30px;
            background-color: #4a6741;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        .step h3 {
            margin: 20px 0 10px;
            font-size: 18px;
        }

        .step p {
            font-size: 14px;
            color: #666;
            max-width: 80%;
            margin: 0 auto;
        }

        /* Footer */
        footer {
            background-color: #fff;
            padding: 50px 0 20px;
            border-top: 1px solid #eee;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        .footer-column {
            flex: 1;
            padding: 0 15px;
        }

        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
            position: relative;
        }

        .footer-column h3:after {
            content: '';
            display: block;
            width: 40px;
            height: 2px;
            background-color: #4a6741;
            margin-top: 10px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #666;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #4a6741;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-icon {
            width: 36px;
            height: 36px;
            background-color: #f5f5f5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease;
        }

        .social-icon:hover {
            background-color: #4a6741;
            color: white;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #eee;
            font-size: 12px;
            color: #666;
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .hero-content {
                width: 60%;
            }
            
            .products-grid, .collection-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .hero-content {
                width: 100%;
                text-align: center;
            }
            
            .hero-image {
                opacity: 0.3;
                width: 100%;
            }
            
            .promo-section, .footer-content {
                flex-direction: column;
            }
            
            .promo-content, .promo-image {
                width: 100%;
                text-align: center;
                padding: 15px;
            }
            
            .steps-container {
                flex-direction: column;
            }
            
            .step {
                margin-bottom: 40px;
            }
            
            .search-container {
                width: 100%;
                margin: 15px 0;
            }
            
            .nav-links {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .products-grid, .collection-grid {
                grid-template-columns: 1fr;
            }
            
            .features {
                flex-wrap: wrap;
            }
            
            .feature {
                width: 50%;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">Terasmu</div>
                <div class="nav-links">
                    <a href="#">Home</a>
                    <a href="#">Shop</a>
                    <a href="#">About</a>
                    <a href="#">Contact</a>
                </div>
                <div class="search-container">
                    <input type="text" placeholder="Search">
                    <i class="search-icon">🔍</i>
                </div>
                <div class="right-nav">
                    <a href="#" class="cart-icon">🛒</a>
                    <a href="#" class="account-icon">👤</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Selamat Datang di Terasmu</h1>
                <p>Mulai hiasan teras mu, temukan semua yang membantumu...</p>
                <button class="hero-btn">Shop Now</button>
            </div>
        </div>
        <div class="hero-image"></div>
    </section>

    <!-- Features -->
    <section class="features container">
        <div class="feature">
            <div class="feature-icon">🏆</div>
            <div class="feature-text">
                <h4>High Quality</h4>
                <p>Premium products</p>
            </div>
        </div>
        <div class="feature">
            <div class="feature-icon">🛡️</div>
            <div class="feature-text">
                <h4>Warranty Protection</h4>
                <p>Extended coverage</p>
            </div>
        </div>
        <div class="feature">
            <div class="feature-icon">🚚</div>
            <div class="feature-text">
                <h4>Free Shipping</h4>
                <p>On all orders</p>
            </div>
        </div>
        <div class="feature">
            <div class="feature-icon">📞</div>
            <div class="feature-text">
                <h4>24/7 Support</h4>
                <p>Always available</p>
            </div>
        </div>
    </section>

    <!-- Collection Section -->
    <section class="collection-section">
        <div class="container">
            <h2 class="section-title">Inspirasi Koleksi</h2>
            <p class="section-subtitle">Inspirasi untuk membuat ruangan anda menjadi nyaman</p>

            <div class="collection-grid">
                <div class="collection-item">
                    <img src="/api/placeholder/400/300" alt="Lampu Chandelier">
                </div>
                <div class="collection-item">
                    <img src="/api/placeholder/400/300" alt="Rak Dinding">
                </div>
                <div class="collection-item">
                    <img src="/api/placeholder/400/300" alt="Lampu Wall">
                </div>
            </div>
        </div>
    </section>

    <!-- Promo Section -->
    <section class="promo-section">
        <div class="container">
            <div class="promo-content">
                <h2>Mempercantik Ruangan anda</h2>
                <p>Terasmu menghadirkan inspirasi desain interior yang tak hanya indah dipandang, tapi juga membuat anda betah berlama di rumah.</p>
                <a href="#" class="promo-btn">PELAJARI LEBIH LANJUT</a>
            </div>
            <div class="promo-image">
                <img src="/api/placeholder/500/400" alt="Jam Dinding Aesthetic">
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products-section">
        <div class="container">
            <h2 class="section-title">Produk Terlaris Kami</h2>
            <p class="section-subtitle">Estetika & Kenyamanan dalam Satu Sentuhan</p>

            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image">
                        <img src="/api/placeholder/400/300" alt="Lampu Bunga Aesthetic">
                    </div>
                    <div class="product-info">
                        <div class="product-category">Lampu</div>
                        <h3 class="product-title">Lampu Bunga Aesthetic</h3>
                        <div class="product-price">Rp850.000</div>
                        <div class="product-rating">
                            ★★★★★
                        </div>
                        <button class="add-to-cart">🛒</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="/api/placeholder/400/300" alt="Lampu Bunga Aesthetic">
                    </div>
                    <div class="product-info">
                        <div class="product-category">Lampu</div>
                        <h3 class="product-title">Lampu Bunga Aesthetic</h3>
                        <div class="product-price">Rp850.000</div>
                        <div class="product-rating">
                            ★★★★★
                        </div>
                        <button class="add-to-cart">🛒</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="/api/placeholder/400/300" alt="Lampu Bunga Aesthetic">
                    </div>
                    <div class="product-info">
                        <div class="product-category">Lampu</div>
                        <h3 class="product-title">Lampu Bunga Aesthetic</h3>
                        <div class="product-price">Rp850.000</div>
                        <div class="product-rating">
                            ★★★★★
                        </div>
                        <button class="add-to-cart">🛒</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Buy Section -->
    <section class="how-to-buy">
        <div class="container">
            <h2 class="section-title">Cara Melakukan Pembelian</h2>
            <p class="section-subtitle">Ikuti langkah dengan baik dan benar sesuai dengan panduan</p>

            <div class="steps-container">
                <div class="step">
                    <div class="step-image">
                        <img src="/api/placeholder/400/300" alt="Pilih produk">
                        <div class="step-number">1</div>
                    </div>
                    <h3>Pilih Produk Anda</h3>
                    <p>Pilih produk sesuai dengan apa yang anda inginkan</p>
                </div>

                <div class="step">
                    <div class="step-image">
                        <img src="/api/placeholder/400/300" alt="Pembayaran">
                        <div class="step-number">2</div>
                    </div>
                    <h3>Lakukan Pembayaran</h3>
                    <p>Lakukan pembayaran dengan cara di atas yang telah disediakan</p>
                </div>

                <div class="step">
                    <div class="step-image">
                        <img src="/api/placeholder/400/300" alt="Pengiriman">
                        <div class="step-number">3</div>
                    </div>
                    <h3>Paket Akan Diproses</h3>
                    <p>Jika sudah melakukan pembayaran, paket anda dikirimkan dalam waktu...</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Ponto</h3>
                    <p>A collection of living arrangement with us to find global you comfortable service natural appearance.</p>
                    
                    <div class="social-links">
                        <a href="#" class="social-icon">f</a>
                        <a href="#" class="social-icon">t</a>
                        <a href="#" class="social-icon">in</a>
                    </div>
                </div>

                <div class="footer-column">
                    <h3>Training Point</h3>
                    <ul class="footer-links">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Pengiriman</a></li>
                        <li><a href="#">Syarat dan Ketentuan</a></li>
                        <li><a href="#">Social</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>File</h3>
                    <ul class="footer-links">
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Perpustakaan</a></li>
                        <li><a href="#">Pencarian</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>Copyright © 2025 - All rights reserved</p>
                <p>Terms & Conditions | Privacy Policy</p>
            </div>
        </div>
    </footer>
</body>
</html>