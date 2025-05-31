<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk - Terasmu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #A67C52;
            --secondary: #F7F3EE;
            --accent: #2E2E2E;
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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
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

        /* Search Form Styles */
        .search-form {
            margin-right: auto;
        }

        .search-form .input-group {
            display: flex;
            gap: 5px;
        }

        .search-input {
            padding: 10px 15px;
            border: 1px solid var(--light-gray);
            border-radius: 6px;
            width: 200px;
            transition: all 0.3s;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(166, 124, 82, 0.2);
        }

        .search-btn {
            background: var(--primary);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search-btn:hover {
            background-color: #8a6543;
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

        .view-btn.active,
        .view-btn:hover {
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
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
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

        .wishlist-btn,
        .cart-btn {
            background: none;
            border: none;
            color: var(--accent);
            cursor: pointer;
            font-size: 16px;
            transition: color 0.3s;
        }

        .wishlist-btn:hover,
        .cart-btn:hover {
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

        .page-link:hover,
        .page-link.active {
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

            .search-form {
                width: 100%;
                margin-bottom: 15px;
            }

            .search-form .input-group {
                width: 100%;
            }

            .search-input {
                flex: 1;
                width: auto;
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
                <a href="{{ route('katalog') }}" class="nav-item">Katalog</a>
                <a href="{{ route('tentangkami') }}" class="nav-item">Tentang kami</a>
                <a href="{{ route('kontak') }}" class="nav-item">Kontak</a>
            </nav>

            <div class="icons">
                <a href="" id="search-btn"><i class="fas fa-search"></i></a>
                <a href="" class="cart-count" id="cart-btn">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cart-counter">0</span>
                </a>
                <a href="" id="user-btn"><i class="fas fa-user"></i></a>
                <a href="" id="menu-btn"><i class="fas fa-bars"></i></a>
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
            <!-- Search Results Info -->
            @if(request('keyword') || request('category'))
            <div class="search-results-info" style="margin-bottom: 20px; padding: 10px; background: var(--secondary); border-radius: 5px;">
                <p>
                    @if(request('keyword'))
                        Menampilkan hasil untuk: <strong>"{{ request('keyword') }}"</strong>
                    @endif
                    @if(request('category'))
                        dalam kategori <strong>{{ ucfirst(request('category')) }}</strong>
                    @endif
                </p>
                <p>Ditemukan {{ $furniturs->total() }} produk</p>
            </div>
            @endif

            <div class="filter-section">
                <!-- Search Form -->
                <form action="{{ route('katalog.search') }}" method="GET" class="search-form">
                    <div class="input-group">
                        <input type="text" 
                               name="keyword" 
                               class="search-input" 
                               placeholder="Cari nama produk..." 
                               value="{{ request('keyword') }}"
                               minlength="2">
                        <button type="submit" class="search-btn">
                            <i class="fas fa-search"></i>
                        </button>
                        @if(request('keyword'))
                        <a href="{{ route('katalog') }}" class="search-btn">
                            <i class="fas fa-times"></i>
                        </a>
                        @endif
                    </div>
                    
                    <!-- Hidden fields to maintain other filters when searching -->
                    @if(request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if(request('sort'))
                        <input type="hidden" name="sort" value="{{ request('sort') }}">
                    @endif
                </form>

                <div class="filter-group">
                    <span class="filter-label">Filter:</span>
                    <select name="category" class="filter-select" onchange="this.form.submit()">
                        <option value="">Semua Kategori</option>
                        <option value="sofa" {{ request('category') == 'sofa' ? 'selected' : '' }}>Sofa</option>
                        <option value="meja" {{ request('category') == 'meja' ? 'selected' : '' }}>Meja</option>
                        <option value="kursi" {{ request('category') == 'kursi' ? 'selected' : '' }}>Kursi</option>
                        <option value="nakas" {{ request('category') == 'nakas' ? 'selected' : '' }}>Nakas</option>
                        <option value="tempat tidur" {{ request('category') == 'tempat tidur' ? 'selected' : '' }}>Tempat Tidur</option>
                    </select>
                    
                    <select class="filter-select" name="sort" onchange="this.form.submit()">
                        <option value="">Urutkan</option>
                        <option value="terbaru" {{ request('sort') == 'terbaru' ? 'selected' : '' }}>Terbaru</option>
                        <option value="termurah" {{ request('sort') == 'termurah' ? 'selected' : '' }}>Harga Terendah</option>
                        <option value="termahal" {{ request('sort') == 'termahal' ? 'selected' : '' }}>Harga Tertinggi</option>
                        <option value="terlaris" {{ request('sort') == 'terlaris' ? 'selected' : '' }}>Terlaris</option>
                    </select>
                </div>
                
                <div class="view-options">
                    <button class="view-btn active"><i class="fas fa-th-large"></i></button>
                    <button class="view-btn"><i class="fas fa-list"></i></button>
                </div>
            </div>

            @if((request('keyword') || request('category')) && $furniturs->isEmpty())
            <div class="no-results" style="text-align: center; padding: 40px 0;">
                <i class="fas fa-search" style="font-size: 48px; color: var(--primary); margin-bottom: 20px;"></i>
                <h3 style="color: var(--accent); margin-bottom: 10px;">Produk tidak ditemukan</h3>
                <p style="color: var(--accent);">
                    @if(request('keyword'))
                        Tidak ada produk dengan nama "{{ request('keyword') }}"
                    @endif
                    @if(request('category'))
                        dalam kategori {{ ucfirst(request('category')) }}
                    @endif
                </p>
                <a href="{{ route('katalog') }}" class="view-btn" style="margin-top: 20px; display: inline-block;">
                    Kembali ke Katalog
                </a>
            </div>
            @else
            <div class="products-grid">
                @foreach ($furniturs as $item)
                    <a href="{{ url('/detailproduk/' . $item->id) }}" class="no-underline">
                        <div class="product-card">
                            @if ($item->label)
                                <div class="product-badge">{{ $item->label }}</div>
                            @endif

                            <div class="product-image-container">
                                <img src="{{ asset($item->image_path) }}" alt="{{ $item->name }}" class="product-image">
                            </div>

                            <div class="product-info">
                                <span class="product-category">{{ $item->category }}</span>
                                <h3 class="product-title">{{ $item->name }}</h3>

                                <div class="product-price">
                                    <span class="current-price">Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                                    @if ($item->original_price)
                                        <span class="original-price">Rp {{ number_format($item->original_price, 0, ',', '.') }}</span>
                                    @endif
                                </div>

                                <div class="product-meta">
                                    <div class="product-rating">
                                        @php
                                            $fullStars = floor($item->rating);
                                            $halfStar = $item->rating - $fullStars >= 0.5 ? 1 : 0;
                                            $emptyStars = 5 - $fullStars - $halfStar;
                                        @endphp

                                        @for ($i = 0; $i < $fullStars; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                        @if ($halfStar)
                                            <i class="fas fa-star-half-alt"></i>
                                        @endif
                                        @for ($i = 0; $i < $emptyStars; $i++)
                                            <i class="far fa-star"></i>
                                        @endfor

                                        <span>({{ $item->rating_count }})</span>
                                    </div>

                                    <div class="product-actions">
                                        <button class="cart-btn"><i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            @endif

            <!-- Pagination -->
            @if($furniturs->hasPages())
            <div class="pagination">
                @if($furniturs->onFirstPage())
                    <span class="page-link disabled">&laquo;</span>
                @else
                    <a href="{{ $furniturs->previousPageUrl() }}" class="page-link">&laquo;</a>
                @endif

                @foreach(range(1, $furniturs->lastPage()) as $i)
                    @if($i == $furniturs->currentPage())
                        <span class="page-link active">{{ $i }}</span>
                    @else
                        <a href="{{ $furniturs->url($i) }}" class="page-link">{{ $i }}</a>
                    @endif
                @endforeach

                @if($furniturs->hasMorePages())
                    <a href="{{ $furniturs->nextPageUrl() }}" class="page-link">&raquo;</a>
                @else
                    <span class="page-link disabled">&raquo;</span>
                @endif
            </div>
            @endif
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
                    <a href="https://www.instagram.com/smktelkomsda/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/smktelkomsda/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.instagram.com/smktelkomsda/"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/smktelkomsda/"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h3>Informasi</h3>
                <a href="#">Tentang Kami</a>
                <a href="#">Kebijakan Privasi</a>
                <a href="#">Syarat dan Ketentuan</a>
                <a href="{{ route('kontak') }}">Kontak</a>
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

        // Auto submit filter select
        document.querySelectorAll('.filter-select').forEach(select => {
            select.addEventListener('change', function() {
                // Get the form element
                let form = this.closest('form');
                if (!form) {
                    // If no form found, create a new one
                    form = document.createElement('form');
                    form.method = 'GET';
                    form.action = "{{ route('katalog') }}";
                    
                    // Add existing query parameters
                    const urlParams = new URLSearchParams(window.location.search);
                    urlParams.forEach((value, key) => {
                        if (key !== this.name && key !== 'page') {
                            const input = document.createElement('input');
                            input.type = 'hidden';
                            input.name = key;
                            input.value = value;
                            form.appendChild(input);
                        }
                    });
                    
                    // Add current select
                    form.appendChild(this);
                    document.body.appendChild(form);
                }
                form.submit();
            });
        });
    </script>
</body>
</html>