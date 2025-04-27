<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurniStyle - Modern Furniture</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2a2a2a;
            --secondary: #f8f8f8;
            --accent: #e67e22;
            --light-gray: #e0e0e0;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--secondary);
            color: var(--primary);
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        /* Header/Navbar Styles */
        header {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 1rem 5%;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo i {
            color: var(--accent);
            margin-right: 0.5rem;
        }

        /* Enhanced Nav Links */
        .nav-links {
            display: flex;
            gap: 1.5rem;
        }

        .nav-item {
            position: relative;
            padding: 0.5rem 0;
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .nav-item::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--accent);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .nav-item:hover {
            color: var(--accent);
        }

        .nav-item:hover::after {
            transform: translateX(0);
        }

        .nav-item:active {
            transform: translateY(2px);
        }

        /* Icons */
        .icons {
            display: flex;
            gap: 1.5rem;
        }

        .icons a {
            color: var(--primary);
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        .icons a:hover {
            color: var(--accent);
        }

        .cart-count {
            position: relative;
        }

        .cart-count span {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: var(--accent);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 0.7rem;
        }

        #menu-btn {
            display: none;
            cursor: pointer;
        }

        /* Mobile Menu */
        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 70px;
                left: 0;
                width: 100%;
                flex-direction: column;
                background: var(--white);
                padding: 1rem 0;
                box-shadow: 0 5px 10px rgba(0,0,0,0.1);
                transform: translateY(-150%);
                opacity: 0;
                transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            }

            .nav-links.active {
                transform: translateY(0);
                opacity: 1;
            }

            .nav-item {
                padding: 1rem 2rem;
                text-align: center;
            }

            .nav-item:hover {
                background: rgba(230, 126, 34, 0.1);
            }

            #menu-btn {
                display: block;
            }
        }

        /* Hero Section */
        .hero {
            position: relative;
            padding: 150px 0 100px;
            overflow: hidden;
            color: white;
        }

        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') center/cover;
            z-index: 1;
        }

        .hero-background::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-container {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero-content {
            max-width: 600px;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            line-height: 1.2;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            line-height: 1.6;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }

        .btn {
            display: inline-block;
            background-color: var(--accent);
            color: white;
            padding: 14px 32px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 18px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .btn:hover {
            background-color: transparent;
            border-color: white;
            color: white;
            transform: translateY(-3px);
        }

        /* Products Section */
        .product-columns {
            padding: 80px 0;
            background-color: var(--white);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            font-size: 32px;
            margin-bottom: 50px;
            color: var(--primary);
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }

        .section-title-container {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 25%;
            width: 50%;
            height: 3px;
            background: var(--accent);
        }

        .product-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            overflow-x: auto;
            padding-bottom: 20px;
        }

        .product-card {
            flex: 1;
            min-width: 300px;
            background: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .product-image {
            height: 250px;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.05);
        }

        .product-info {
            padding: 20px;
        }

        .product-name {
            font-size: 20px;
            margin-bottom: 10px;
            color: var(--primary);
        }

        .product-description {
            color: #7f8c8d;
            margin-bottom: 20px;
            line-height: 1.5;
            font-size: 15px;
        }

        .product-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 18px;
            font-weight: 600;
            color: var(--accent);
        }

        .add-to-cart {
            background: var(--accent);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .add-to-cart:hover {
            background: #d35400;
        }

        /* Best Seller Section */
        .best-seller-section {
            padding: 80px 0;
            background-color: var(--secondary);
        }

        .best-seller-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .best-seller-card {
            background: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            margin-top: 40px;
        }

        .best-seller-card:hover {
            transform: translateY(-10px);
        }

        .best-seller-image {
            width: 100%;
            height: 400px;
            overflow: hidden;
        }

        .best-seller-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .best-seller-card:hover .best-seller-image img {
            transform: scale(1.05);
        }

        .best-seller-info {
            padding: 25px;
        }

        .best-seller-name {
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--primary);
        }

        .best-seller-description {
            color: #7f8c8d;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 16px;
        }

        .best-seller-price {
            font-size: 22px;
            font-weight: bold;
            color: var(--accent);
            margin-bottom: 15px;
        }

        .cashback {
            display: flex;
            align-items: center;
            background-color: #f9f1e7;
            padding: 12px 18px;
            border-radius: 8px;
            margin-top: 18px;
        }

        .voucher-icon {
            margin-right: 12px;
            color: var(--accent);
            font-size: 22px;
        }

        .cashback-text {
            color: var(--accent);
            font-weight: bold;
        }

        /* User Reviews Section */
        .reviews-section {
            padding: 80px 0;
            background-color: var(--white);
        }

        .reviews-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .reviews-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .review-card {
            background: var(--secondary);
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .review-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .user-profile {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .user-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
            border: 3px solid var(--accent);
        }

        .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-info {
            flex: 1;
        }

        .user-name {
            font-size: 18px;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 3px;
        }

        .user-username {
            font-size: 14px;
            color: #7f8c8d;
        }

        .rating {
            display: flex;
            margin-bottom: 12px;
        }

        .star {
            color: #f39c12;
            font-size: 18px;
            margin-right: 2px;
        }

        .review-date {
            font-size: 14px;
            color: #7f8c8d;
            margin-bottom: 15px;
        }

        .review-text {
            color: var(--primary);
            line-height: 1.6;
            font-size: 15px;
        }

        .verified-buyer {
            display: inline-flex;
            align-items: center;
            background-color: #e3f2fd;
            color: #1976d2;
            font-size: 13px;
            padding: 3px 8px;
            border-radius: 4px;
            margin-top: 15px;
        }

        .verified-buyer i {
            margin-right: 5px;
            font-size: 12px;
        }

        /* Footer Styles */
        footer {
            background-color: var(--primary);
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
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: var(--accent);
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
            color: var(--accent);
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
            color: var(--accent);
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
            background-color: var(--accent);
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
            background-color: var(--accent);
            color: white;
            border: none;
            padding: 0 20px;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .newsletter-form button:hover {
            background-color: #d35400;
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

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 36px;
            }
            
            .reviews-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .hero {
                padding: 120px 0 80px;
                text-align: center;
            }

            .hero-content {
                margin: 0 auto;
            }

            .hero h1 {
                font-size: 32px;
            }

            .hero p {
                font-size: 18px;
            }

            .product-row {
                flex-wrap: nowrap;
                -webkit-overflow-scrolling: touch;
            }

            .product-card {
                flex: 0 0 85%;
                margin-right: 15px;
            }
            
            .reviews-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .footer-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 28px;
            }

            .hero p {
                font-size: 16px;
            }

            .btn {
                padding: 12px 24px;
                font-size: 16px;
            }

            .section-title {
                font-size: 28px;
            }

            .best-seller-name {
                font-size: 20px;
            }

            .newsletter-form {
                flex-direction: column;
            }

            .newsletter-form input,
            .newsletter-form button {
                width: 100%;
                border-radius: 4px;
            }

            .newsletter-form button {
                margin-top: 10px;
                padding: 12px;
            }
        }
    </style>
</head>
<body>
    <!-- Header with Enhanced Navbar -->
    <header>
        <div class="header-container">
            <a href="#" class="logo">
                <i class="fas fa-couch"></i>
                Terasmu
            </a>

            <nav class="nav-links">
                <a href="#" class="nav-item">Beranda</a>
                <a href="katalog.blade.php" class="nav-item">Beli</a>
                <a href="#" class="nav-item">Koleksi</a>
                <a href="#" class="nav-item">Tentang kami</a>
                <a href="#" class="nav-item">Kontak</a>
            </nav>

            <div class="icons">
                <a href="#" id="search-btn"><i class="fas fa-search"></i></a>
                <a href="#" class="cart-count" id="cart-btn">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cart-counter">0</span>
                </a>
                <a href="#" id="user-btn"><i class="fas fa-user"></i></a>
                <a href="#" id="menu-btn"><i class="fas fa-bars"></i></a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-background"></div>
        <div class="hero-container">
            <div class="hero-content">
                <h1>Furniture Modern Untuk Rumah Anda</h1>
                <p>Temukan koleksi furnitur dengan kualitas tinggi dan gaya pilihan anda yang dapat memadukan kenyamanan dan keindahan.</p>
                <a href="#" class="btn">Beli Sekarang</a>
            </div>
        </div>
    </section>

    <!-- Best Seller Section -->
    <section class="best-seller-section">
        <div class="best-seller-container">
            <div class="section-title-container">
                <h2 class="section-title">Produk Terlaris Kami</h2>
            </div>
            
            <div class="best-seller-card">
                <div class="best-seller-image">
                    <img src="/api/placeholder/800/400" alt="Modern Scandinavian Armchair">
                </div>
                <div class="best-seller-info">
                    <h2 class="best-seller-name">Kursi Moderen</h2>
                    <p class="best-seller-description">
                        Kursi kayu berkualitas premium dengan desain Scandinavian yang elegan. 
                        Dibuat dari kayu jati pilihan dan dilapisi dengan busa yang nyaman, 
                        kursi ini akan menjadi tambahan sempurna untuk ruang tamu Anda. 
                        Desainnya yang minimalis cocok untuk berbagai dekorasi interior.
                    </p>
                    <div class="best-seller-price">Rp 2.499.000</div>
                    <div class="cashback">
                        <i class="fas fa-ticket-alt voucher-icon"></i>
                        <span class="cashback-text">Cashback 10% hingga Rp 200.000</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- User Reviews Section -->
    <section class="reviews-section">
        <div class="reviews-container">
            <div class="section-title-container">
                <h2 class="section-title">Revie Pembeli</h2>
            </div>
            
            <div class="reviews-grid">
                <!-- User 1 Review -->
                <div class="review-card">
                    <div class="user-profile">
                        <div class="user-avatar">
                            <img src="/api/placeholder/100/100" alt="Dewi Susanti">
                        </div>
                        <div class="user-info">
                            <h3 class="user-name">Dewi Susanti</h3>
                            <p class="user-username">@dewisusanti</p>
                        </div>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                    </div>
                    <p class="review-date">Dibeli pada: 15 April 2025</p>
                    <p class="review-text">
                        Kursi ini luar biasa nyaman dan kuat! Warna dan finishingnya persis seperti di foto. 
                        Sudah saya gunakan selama sebulan dan sangat puas dengan kualitasnya. 
                        Proses pengirimannya juga sangat cepat.
                    </p>
                    <div class="verified-buyer">
                        <i class="fas fa-check-circle"></i> Pembeli Terverifikasi
                    </div>
                </div>
                
                <!-- User 2 Review -->
                <div class="review-card">
                    <div class="user-profile">
                        <div class="user-avatar">
                            <img src="/api/placeholder/100/100" alt="Budi Prakoso">
                        </div>
                        <div class="user-info">
                            <h3 class="user-name">Budi Prakoso</h3>
                            <p class="user-username">@budiprakoso</p>
                        </div>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="far fa-star star"></i>
                    </div>
                    <p class="review-date">Dibeli pada: 3 April 2025</p>
                    <p class="review-text">
                        Desain kursinya sangat elegan dan cocok dengan interior rumah saya. 
                        Perakitannya juga mudah, hanya butuh waktu 15 menit. 
                        Satu bintang berkurang karena ada sedikit goresan di bagian kaki kursi, tapi overall sangat bagus.
                    </p>
                    <div class="verified-buyer">
                        <i class="fas fa-check-circle"></i> Pembeli Terverifikasi
                    </div>
                </div>
                
                <!-- User 3 Review -->
                <div class="review-card">
                    <div class="user-profile">
                        <div class="user-avatar">
                            <img src="/api/placeholder/100/100" alt="Rina Wijaya">
                        </div>
                        <div class="user-info">
                            <h3 class="user-name">Rina Wijaya</h3>
                            <p class="user-username">@rinawijaya</p>
                        </div>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star star"></i>
                        <i class="fas fa-star-half-alt star"></i>
                    </div>
                    <p class="review-date">Dibeli pada: 20 Maret 2025</p>
                    <p class="review-text">
                        Saya beli kursi ini untuk ruang kerja saya dan sangat cocok! 
                        Bahan kayunya berkualitas tinggi dan terasa solid. 
                        Bantalannya juga nyaman untuk duduk berjam-jam. 
                        Cashback yang diberikan juga langsung masuk ke akun saya.
                    </p>
                    <div class="verified-buyer">
                        <i class="fas fa-check-circle"></i> Pembeli Terverifikasi
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="product-columns">
        <div class="container">
            <div class="section-title-container">
                <h2 class="section-title">Produk Unggulan Kami</h2>
            </div>
            <div class="product-row">
                <!-- Product 1 - Chair -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1528&q=80" alt="Modern Chair">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Kursi Elegan</h3>
                        <p class="product-description">Kursi berlapis kain premium dengan kaki kayu, cocok untuk ruang tamu anda.</p>
                        <div class="product-price">
                            <span>Rp390.000</span>
                            <button class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 - Table -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Wooden Table">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Kursi</h3>
                        <p class="product-description">Kursi empuk dan nyaman yang dapat membuat ruang tamu anda lebih elegan.</p>
                        <div class="product-price">
                            <span>Rp 500.000</span>
                            <button class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 - Wardrobe -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Modern Wardrobe">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Kaca minimalis</h3>
                        <p class="product-description">Membuat ruangan anda lebih elegan, dan lebih indah untuk dipandang.</p>
                        <div class="product-price">
                            <span>Rp645.000</span>
                            <button class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <!-- Company Info Column -->
            <div class="footer-column">
                <a href="#" class="footer-logo">
                    <i class="fas fa-couch"></i>
                    Terasmu
                </a>
                <p>Kami menciptakan ruang yang indah dan fungsional dengan koleksi furnitur buatan tangan yang dirancang untuk kehidupan modern.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>

            <!-- Quick Links Column -->
            <div class="footer-column">
                <h3>Link Kami</h3>
                <a href="#">Home</a>
                <a href="#">Shop</a>
                <a href="#">Collections</a>
                <a href="#">About Us</a>
                <a href="#">Contact</a>
                <a href="#">Blog</a>
            </div>

            <!-- Customer Service Column -->
            <div class="footer-column">
                <h3>Layanan Kami</h3>
                <a href="#">My Account</a>
                <a href="#">Order Tracking</a>
                <a href="#">Wishlist</a>
                <a href="#">Shipping Policy</a>
                <a href="#">Returns & Refunds</a>
                <a href="#">FAQ</a>
            </div>

            <!-- Contact & Newsletter Column -->
            <div class="footer-column">
                <h3>Kontak Kami</h3>
                <p><i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i> 123 Terasmu St, Design District, Jakarta</p>
                <p><i class="fas fa-phone" style="margin-right: 10px;"></i> (021) 1234-5678</p>
                <p><i class="fas fa-envelope" style="margin-right: 10px;"></i> info@terasmu.com</p>
                
                <h3 style="margin-top: 20px;">Newsletter</h3>
                <p>Subscribe to get updates on new arrivals and special offers.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your email address" required>
                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 FurniStyle. All Rights Reserved. | Designed with <i class="fas fa-heart" style="color: #e67e22;"></i> by FurniStyle Team</p>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const menuBtn = document.getElementById('menu-btn');
        const navLinks = document.querySelector('.nav-links');
        
        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Smooth click animation for nav items
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', function(e) {
                this.style.transform = 'translateY(2px)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 200);
            });
        });
    </script>
</body>
</html>