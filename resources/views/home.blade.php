<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terasmu - Furniture Modern</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--secondary);
            color: var(--text-color);
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
            color: var(--accent);
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo i {
            color: var(--primary);
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
            color: var(--accent);
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
            background: var(--primary);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .nav-item:hover {
            color: var(--primary);
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
            color: var(--accent);
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        .icons a:hover {
            color: var(--primary);
        }

        .cart-count {
            position: relative;
        }

        .cart-count span {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: var(--primary);
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
                background: rgba(166, 124, 82, 0.1);
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
            background: rgba(46, 46, 46, 0.6); /* Overlay dengan warna aksen */
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
            background-color: var(--primary);
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
            color: var(--accent);
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
            background: var(--primary);
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
            color: var(--accent);
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
            color: var(--primary);
        }

        .add-to-cart {
            background: var(--primary);
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
            background: #8a6543;
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
            color: var(--accent);
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
            color: var(--primary);
            margin-bottom: 15px;
        }

        .cashback {
            display: flex;
            align-items: center;
            background-color: rgba(166, 124, 82, 0.1);
            padding: 12px 18px;
            border-radius: 8px;
            margin-top: 18px;
        }

        .voucher-icon {
            margin-right: 12px;
            color: var(--primary);
            font-size: 22px;
        }

        .cashback-text {
            color: var(--primary);
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
            border: 3px solid var(--primary);
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
            color: var(--accent);
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
            color: var(--primary);
            font-size: 18px;
            margin-right: 2px;
        }

        .review-date {
            font-size: 14px;
            color: #7f8c8d;
            margin-bottom: 15px;
        }

        .review-text {
            color: var(--accent);
            line-height: 1.6;
            font-size: 15px;
        }

        .verified-buyer {
            display: inline-flex;
            align-items: center;
            background-color: rgba(166, 124, 82, 0.1);
            color: var(--primary);
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

        /* Product Badges */
        .product-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--primary);
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
            z-index: 2;
        }

        .product-image-container {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.05);
        }

        /* Product Info Styles */
        .product-category {
            display: block;
            color: var(--primary);
            font-size: 14px;
            margin-bottom: 5px;
        }

        .product-title {
            font-size: 18px;
            color: var(--accent);
            margin-bottom: 10px;
        }

        .product-price {
            margin-bottom: 15px;
        }

        .current-price {
            color: var(--primary);
            font-weight: bold;
            font-size: 18px;
        }

        .original-price {
            color: #999;
            text-decoration: line-through;
            font-size: 15px;
            margin-left: 8px;
        }

        .product-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .product-rating {
            color: var(--primary);
        }

        .product-rating span {
            color: #7f8c8d;
            font-size: 14px;
            margin-left: 5px;
        }

        .product-actions {
            display: flex;
            gap: 10px;
        }

        .wishlist-btn, .cart-btn {
            background: none;
            border: none;
            color: var(--accent);
            cursor: pointer;
            font-size: 16px;
            transition: color 0.3s;
        }

        .wishlist-btn:hover, .cart-btn:hover {
            color: var(--primary);
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
                TerasMu
            </a>

            <nav class="nav-links">
                <a href="/" class="nav-item">Beranda</a>
                <a href="{{ route('katalog') }}" class="nav-item">Katalog</a>
                <a href="#" class="nav-item">Tentang kami</a>
                <a href="#" class="nav-item">Kontak</a>
            </nav>            

            <div class="icons">
                <a href="#" id="search-btn"><i class="fas fa-search"></i></a>
                <a href="#" class="cart-count" id="cart-btn">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cart-counter">0</span>
                </a>
                <a href="{{ route('signup')}}" id="user-btn"><i class="fas fa-user"></i></a>
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
                <h2 class="section-title">Review Pembeli</h2>
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
                <!-- Produk 1 -->
                <div class="product-card">
                    <div class="product-badge">Terlaris</div>
                    <div class="product-image-container">
                        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Sofa Minimalis" class="product-image">
                    </div>
                    <div class="product-info">
                        <span class="product-category">Sofa</span>
                        <h3 class="product-title">Sofa Minimalis Linen</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 8.499.000</span>
                            <span class="original-price">Rp 9.999.000</span>
                        </div>
                        <div class="product-meta">
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(24)</span>
                            </div>
                            <div class="product-actions">
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <button class="cart-btn"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="product-card">
                    <div class="product-badge">Baru</div>
                    <div class="product-image-container">
                        <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Meja Makan" class="product-image">
                    </div>
                    <div class="product-info">
                        <span class="product-category">Meja</span>
                        <h3 class="product-title">Meja Makan Kayu Jati</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 12.750.000</span>
                        </div>
                        <div class="product-meta">
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(18)</span>
                            </div>
                            <div class="product-actions">
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <button class="cart-btn"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="product-card">
                    <div class="product-image-container">
                        <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Kursi Kantor" class="product-image">
                    </div>
                    <div class="product-info">
                        <span class="product-category">Kursi</span>
                        <h3 class="product-title">Kursi Kerja Ergonomis</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 3.299.000</span>
                            <span class="original-price">Rp 3.999.000</span>
                        </div>
                        <div class="product-meta">
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(42)</span>
                            </div>
                            <div class="product-actions">
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <button class="cart-btn"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
                <a href="#">Pelacakan Pesanan</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Terasmu. Semua hak dilindungi.</p>
        </div>
    </footer>

</body>
</html>