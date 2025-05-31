<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursi Teras Minimalis - Terasmu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Global Styles */
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
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--white);
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
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

        /* Product Detail Section */
        .product-detail {
            padding: 40px 0;
            background-color: var(--white);
        }

        .product-detail .container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .product-gallery {
            flex: 1;
            min-width: 300px;
        }

        .main-image {
            width: 100%;
            margin-bottom: 15px;
            border: 1px solid var(--light-gray);
            border-radius: 8px;
            overflow: hidden;
        }

        .main-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s;
            cursor: zoom-in;
        }

        .main-image img:hover {
            transform: scale(1.05);
        }

        .thumbnail-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        .thumbnail-grid img {
            width: 100%;
            border: 1px solid var(--light-gray);
            border-radius: 5px;
            cursor: pointer;
            transition: border 0.3s;
        }

        .thumbnail-grid img:hover {
            border-color: var(--primary);
        }

        .product-info {
            flex: 1;
            min-width: 300px;
        }

        .product-info h1 {
            font-size: 28px;
            margin-bottom: 5px;
            color: var(--accent);
        }

        .product-code {
            color: #777;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .price {
            margin: 20px 0;
        }

        .original-price {
            text-decoration: line-through;
            color: #777;
            margin-right: 10px;
        }

        .discounted-price {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
        }

        .discount-badge {
            background-color: #ffeb3b;
            color: #333;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            margin-left: 10px;
        }

        .rating {
            margin: 15px 0;
        }

        .stars {
            color: #ffc107;
            font-size: 18px;
        }

        .review-count {
            color: #777;
            font-size: 14px;
            margin-left: 5px;
        }

        .description {
            margin: 20px 0;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--light-gray);
        }

        .specs {
            margin: 20px 0;
        }

        .specs h3 {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .specs ul {
            list-style: none;
        }

        .specs ul li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
        }

        .specs ul li::before {
            content: "•";
            color: var(--primary);
            position: absolute;
            left: 0;
        }

        .color-options {
            margin: 20px 0;
        }

        .color-options h3 {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .colors {
            display: flex;
            gap: 10px;
        }

        .colors input[type="radio"] {
            display: none;
        }

        .colors label {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            border: 2px solid transparent;
            transition: border 0.3s;
        }

        .colors input[type="radio"]:checked+label {
            border-color: var(--primary);
        }

        .quantity {
            margin: 20px 0;
        }

        .quantity h3 {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .qty-selector {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .qty-btn {
            width: 30px;
            height: 30px;
            background-color: var(--light-gray);
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }

        .qty-btn:hover {
            background-color: #d0d0d0;
        }

        .qty-selector input {
            width: 50px;
            height: 30px;
            text-align: center;
            border: 1px solid var(--light-gray);
            border-radius: 4px;
        }

        .shipping-info {
            margin: 20px 0;
            padding: 15px;
            background-color: var(--secondary);
            border-radius: 8px;
        }

        .shipping-info p {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .shipping-info i {
            color: var(--primary);
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin: 25px 0;
        }

        .btn-add-to-cart,
        .btn-buy-now {
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-add-to-cart {
            background-color: var(--light-gray);
            color: var(--accent);
        }

        .btn-add-to-cart:hover {
            background-color: #d0d0d0;
        }

        .btn-buy-now {
            background-color: var(--primary);
            color: var(--white);
        }

        .btn-buy-now:hover {
            background-color: #8c5d3a;
        }

        /* Reviews Section */
        .reviews {
            padding: 40px 0;
            background-color: var(--secondary);
        }

        .reviews h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: var(--accent);
        }

        .review-summary {
            margin-bottom: 30px;
        }

        .average-rating {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .average {
            font-size: 20px;
            font-weight: 700;
        }

        .total-reviews {
            color: #777;
        }

        .review-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .review-item {
            background-color: var(--white);
            padding: 20px;
            border-radius: 8px;
            box-shadow: var(--shadow);
        }

        .reviewer {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .name {
            font-weight: 600;
        }

        .review-text {
            margin-bottom: 10px;
        }

        .review-date {
            color: #777;
            font-size: 14px;
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
    <!-- Breadcrumb Navigation -->
    <section class="breadcrumb">
        <div class="container">
            <a href="/">Beranda</a> &gt;
            <a href="/katalog">Katalog</a> &gt;
            <span>{{ $produk->name }}</span>
        </div>
    </section>

    <!-- Product Detail Section -->
    <section class="product-detail">
        <div class="container">

            {{-- Gallery --}}
            <div class="product-gallery">
                <div class="main-image">
                    <img src="{{ asset($produk->image_path) }}" alt="{{ $produk->name }}" id="mainImg">
                </div>
                <div class="thumbnail-grid">
                    @if($produk->images && $produk->images->count())
                        @foreach($produk->images as $img)
                            <img src="{{ asset($img->url) }}" alt="Thumbnail {{ $loop->iteration }}"
                                onclick="changeImage(this)">
                        @endforeach
                    @else
                        {{-- fallback to main image --}}
                        <img src="{{ asset($produk->image_path) }}" alt="{{ $produk->name }}" onclick="changeImage(this)">
                    @endif
                </div>
            </div>

            {{-- Info --}}
            <div class="product-info">
                <h1>{{ $produk->name }} &ndash; {{ $produk->label }}</h1>
                <p class="product-code">Kode Produk: {{ $produk->code ?? $produk->id }}</p>

                {{-- Price & Discount --}}
                <div class="price">
                    @if(!is_null($produk->original_price))
                        <span class="original-price">
                            Rp {{ number_format($produk->original_price, 0, ',', '.') }}
                        </span>
                        <span class="discounted-price">
                            Rp {{ number_format($produk->price, 0, ',', '.') }}
                        </span>
                        @php
                            $discount = round((($produk->original_price - $produk->price) / $produk->original_price) * 100);
                        @endphp
                        @if($discount > 0)
                            <span class="discount-badge">Diskon {{ $discount }}%</span>
                        @endif
                    @else
                        <span class="discounted-price">
                            Rp {{ number_format($produk->price, 0, ',', '.') }}
                        </span>
                    @endif
                </div>

                {{-- Rating --}}
                <div class="rating">
                    <span class="stars">
                        {{-- simple full‐star loop --}}
                        @for($i = 0; $i < floor($produk->rating); $i++) ★ @endfor
                        @for($i = 0; $i < 5 - floor($produk->rating); $i++) ☆ @endfor
                    </span>
                    <span class="review-count">({{ $produk->rating_count }} ulasan)</span>
                </div>
                {{-- Description --}}
                <div class="description">
                    <h3>Deskripsi Lengkap</h3>
                    <p>{!! nl2br(e($produk->detail->full_description ?? '—')) !!}</p>
                </div>

                {{-- Specs --}}
                <div class="specs">
                    <h3>Spesifikasi Produk</h3>
                    <ul>
                        <li><strong>Material:</strong> {{ $produk->detail->material ?? '—' }}</li>
                        <li><strong>Dimensi:</strong> {{ $produk->detail->dimensi ?? '—' }}</li>
                        <li><strong>Berat:</strong> {{ $produk->detail->berat ?? '—' }} kg</li>
                        <li><strong>Warna:</strong> {{ $produk->detail->warna ?? '—' }}</li>
                    </ul>
                </div>  
                {{-- Quantity --}}
                <div class="quantity">
                    <h3>Jumlah:</h3>
                    <div class="qty-selector">
                        <button class="qty-btn minus">-</button>
                        <input type="number" value="1" min="1" max="10">
                        <button class="qty-btn plus">+</button>
                    </div>
                </div>

                {{-- Shipping & Actions --}}
                <div class="shipping-info">
                    <p><i class="fas fa-truck"></i> <strong>Gratis Ongkir</strong> (Jabodetabek, min. Rp 500.000)</p>
                    <p><i class="fas fa-bolt"></i> <strong>Pengiriman Cepat</strong> (1–3 hari kerja)</p>
                    <p><i class="fas fa-store"></i> <strong>Ambil di Toko</strong> (Outlet Terasmu terdekat)</p>
                </div>

                <div class="action-buttons">
                    <a href="{{ route('payment') }}">
                        <button class="btn-buy-now">Beli Sekarang</button>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Customer Reviews Section -->
    <section class="reviews">
        <div class="container">
            <h2>Ulasan Pembeli</h2>
            <div class="review-summary">
                <div class="average-rating">
                    <span class="stars">★★★★★</span>
                    <span class="average">4.9/5</span>
                    <span class="total-reviews">(128 ulasan)</span>
                </div>
            </div>

            <div class="review-list">
                <div class="review-item">
                    <div class="reviewer">
                        <span class="name">{{$produk->name}}</span>
                        <span class="stars">★★★★★</span>
                    </div>
                    <p class="review-text">"Kursinya sangat nyaman dan kualitas kayunya bagus!"</p>
                    <p class="review-date">12 Mei 2025</p>
                </div>

                <div class="review-item">
                    <div class="reviewer">
                        <span class="name">Anita W.</span>
                        <span class="stars">★★★★★</span>
                    </div>
                    <p class="review-text">"Pengiriman cepat, packing rapi. Recommended!"</p>
                    <p class="review-date">5 Mei 2025</p>
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
                <a href="#">Kebijakan Privasi</a>
                <a href="#">Syarat dan Ketentuan</a>
                <a href="{{ route('kontak')}}">Kontak</a>
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
        // Fungsi untuk mengganti gambar utama saat thumbnail diklik
        function changeImage(element) {
            const mainImg = document.getElementById('mainImg');
            mainImg.src = element.src;
        }

        // Fungsi untuk menambah/mengurangi jumlah produk
        document.querySelector('.qty-btn.minus').addEventListener('click', function () {
            const input = this.nextElementSibling;
            if (input.value > 1) input.value--;
        });

        document.querySelector('.qty-btn.plus').addEventListener('click', function () {
            const input = this.previousElementSibling;
            if (input.value < 10) input.value++;
        });

        // Fungsi untuk tombol beli/tambah ke keranjang (simulasi)
        document.querySelector('.btn-add-to-cart').addEventListener('click', function () {
            alert('Produk telah ditambahkan ke keranjang!');
        });
    </script>
</body>

</html>