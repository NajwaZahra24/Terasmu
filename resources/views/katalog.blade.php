<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk - Terasmu</title>
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

        /* Page Header */
        .page-header {
            background-color: var(--primary);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .page-header h1 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .breadcrumb {
            display: flex;
            justify-content: center;
            list-style: none;
        }

        .breadcrumb li {
            margin: 0 10px;
            position: relative;
        }

        .breadcrumb li:not(:last-child)::after {
            content: '/';
            position: absolute;
            right: -15px;
            color: var(--secondary);
        }

        .breadcrumb a {
            color: var(--secondary);
            text-decoration: none;
            transition: color 0.3s;
        }

        .breadcrumb a:hover {
            color: white;
        }

        /* Catalog Section */
        .catalog-section {
            padding: 60px 0;
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

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 25%;
            width: 50%;
            height: 3px;
            background: var(--primary);
        }

        /* Filter Section */
        .filter-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .filter-group {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .filter-label {
            font-weight: 600;
            color: var(--accent);
        }

        .filter-select {
            padding: 10px 15px;
            border: 1px solid var(--light-gray);
            border-radius: 6px;
            background-color: var(--white);
            color: var(--accent);
            cursor: pointer;
            transition: all 0.3s;
        }

        .filter-select:hover {
            border-color: var(--primary);
        }

        .filter-select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(166, 124, 82, 0.2);
        }

        .view-options {
            display: flex;
            gap: 10px;
        }

        .view-btn {
            background: none;
            border: 1px solid var(--light-gray);
            color: var(--accent);
            width: 40px;
            height: 40px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .view-btn.active, .view-btn:hover {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }

        .product-card {
            background: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

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
        .product-info {
            padding: 20px;
        }

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

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 50px;
            gap: 10px;
        }

        .page-item {
            list-style: none;
        }

        .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 6px;
            background-color: var(--white);
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: 1px solid var(--light-gray);
        }

        .page-link:hover, .page-link.active {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
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

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .products-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .products-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .filter-section {
                flex-direction: column;
                align-items: flex-start;
            }

            .filter-group {
                width: 100%;
                flex-wrap: wrap;
            }
        }

        @media (max-width: 576px) {
            .products-grid {
                grid-template-columns: 1fr;
            }

            .page-header h1 {
                font-size: 28px;
            }

            .section-title {
                font-size: 28px;
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
                <a href="/" class="nav-item">Beranda</a>
                <a href="{{ route('katalog') }}" class="nav-item active">Katalog</a>
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

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Katalog Produk</h1>
            <ul class="breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li>Katalog</li>
            </ul>
        </div>
    </section>

    <!-- Catalog Section -->
    <section class="catalog-section">
        <div class="container">
            <div class="filter-section">
                <div class="filter-group">
                    <span class="filter-label">Filter:</span>
                    <select class="filter-select">
                        <option value="">Semua Kategori</option>
                        <option value="sofa">Sofa</option>
                        <option value="kursi">Kursi</option>
                        <option value="meja">Meja</option>
                        <option value="lemari">Lemari</option>
                        <option value="aksesoris">Aksesoris</option>
                    </select>
                    <select class="filter-select">
                        <option value="">Semua Harga</option>
                        <option value="0-1">Rp 0 - 1.000.000</option>
                        <option value="1-3">Rp 1.000.000 - 3.000.000</option>
                        <option value="3-5">Rp 3.000.000 - 5.000.000</option>
                        <option value="5-10">Rp 5.000.000 - 10.000.000</option>
                        <option value="10+">> Rp 10.000.000</option>
                    </select>
                    <select class="filter-select">
                        <option value="">Urutkan</option>
                        <option value="terbaru">Terbaru</option>
                        <option value="termurah">Harga Terendah</option>
                        <option value="termahal">Harga Tertinggi</option>
                        <option value="terlaris">Terlaris</option>
                        <option value="rating">Rating Tertinggi</option>
                    </select>
                </div>
                <div class="view-options">
                    <button class="view-btn active"><i class="fas fa-th-large"></i></button>
                    <button class="view-btn"><i class="fas fa-list"></i></button>
                </div>
            </div>

            <div class="products-grid">
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

                <!-- Produk 4 -->
                <div class="product-card">
                    <div class="product-badge">Diskon</div>
                    <div class="product-image-container">
                        <img src="https://images.unsplash.com/photo-1583847268964-b28dc8f51f92?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Lemari Pakaian" class="product-image">
                    </div>
                    <div class="product-info">
                        <span class="product-category">Lemari</span>
                        <h3 class="product-title">Lemari Pakaian Minimalis</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 5.999.000</span>
                            <span class="original-price">Rp 7.500.000</span>
                        </div>
                        <div class="product-meta">
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(36)</span>
                            </div>
                            <div class="product-actions">
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <button class="cart-btn"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produk 5 -->
                <div class="product-card">
                    <div class="product-image-container">
                        <img src="https://images.unsplash.com/photo-1517705008128-361805f42e86?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Meja Kerja" class="product-image">
                    </div>
                    <div class="product-info">
                        <span class="product-category">Meja</span>
                        <h3 class="product-title">Meja Kerja Modern</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 2.850.000</span>
                        </div>
                        <div class="product-meta">
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(15)</span>
                            </div>
                            <div class="product-actions">
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <button class="cart-btn"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produk 6 -->
                <div class="product-card">
                    <div class="product-badge">Terbatas</div>
                    <div class="product-image-container">
                        <img src="https://images.unsplash.com/photo-1567538096631-e0de8a1e6a1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Rak Buku" class="product-image">
                    </div>
                    <div class="product-info">
                        <span class="product-category">Rak</span>
                        <h3 class="product-title">Rak Buku Kayu Oak</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 1.750.000</span>
                            <span class="original-price">Rp 2.200.000</span>
                        </div>
                        <div class="product-meta">
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(28)</span>
                            </div>
                            <div class="product-actions">
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <button class="cart-btn"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produk 7 -->
                <div class="product-card">
                    <div class="product-image-container">
                        <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Lampu Meja" class="product-image">
                    </div>
                    <div class="product-info">
                        <span class="product-category">Lampu</span>
                        <h3 class="product-title">Lampu Meja Industrial</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 1.250.000</span>
                        </div>
                        <div class="product-meta">
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(31)</span>
                            </div>
                            <div class="product-actions">
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <button class="cart-btn"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produk 8 -->
                <div class="product-card">
                    <div class="product-badge">Baru</div>
                    <div class="product-image-container">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Kursi Santai" class="product-image">
                    </div>
                    <div class="product-info">
                        <span class="product-category">Kursi</span>
                        <h3 class="product-title">Kursi Santai Eksklusif</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 4.500.000</span>
                        </div>
                        <div class="product-meta">
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(12)</span>
                            </div>
                            <div class="product-actions">
                                <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                                <button class="cart-btn"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link"><i class="fas fa-chevron-left"></i></a></li>
                <li class="page-item"><a href="#" class="page-link active">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">4</a></li>
                <li class="page-item"><a href="#" class="page-link">5</a></li>
                <li class="page-item"><a href="#" class="page-link"><i class="fas fa-chevron-right"></i></a></li>
            </ul>
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
                <a href="#">Pelacakan Pesanan</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Terasmu. Semua hak dilindungi.</p>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const menuBtn = document.getElementById('menu-btn');
        const navLinks = document.querySelector('.nav-links');

        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // View Options Toggle
        const viewBtns = document.querySelectorAll('.view-btn');
        const productsGrid = document.querySelector('.products-grid');

        viewBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                viewBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                if (btn.querySelector('i').classList.contains('fa-list')) {
                    productsGrid.classList.add('list-view');
                } else {
                    productsGrid.classList.remove('list-view');
                }
            });
        });
    </script>
</body>
</html>