<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengiriman - Terasmu</title>
    <style>
        :root {
            --primary: #A67C52;  /* Warna elemen utama */
            --secondary: #F7F3EE;  /* Warna latar utama */
            --accent: #2E2E2E;  /* Warna aksen dan teks */
            --light-gray: #e0e0e0;
            --white: #ffffff;
            --text-color: #2E2E2E;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--secondary);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background-color: var(--white);
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 20px 0;
        }

        .logo {
            color: var(--primary);
            font-size: 28px;
            font-weight: 700;
            text-decoration: none;
        }

        .shipping-hero {
            background-color: var(--primary);
            color: var(--white);
            padding: 60px 0;
            text-align: center;
            margin-bottom: 40px;
        }

        .shipping-hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .shipping-content {
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 40px;
            margin-bottom: 40px;
        }

        h2 {
            color: var(--primary);
            margin-top: 30px;
            margin-bottom: 20px;
            font-size: 24px;
        }

        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        .info-box {
            background-color: var(--secondary);
            border-left: 4px solid var(--primary);
            padding: 20px;
            margin: 20px 0;
            border-radius: 0 4px 4px 0;
        }

        /* Footer Styles*/
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
            .about-section {
                flex-direction: column;
                gap: 30px;
            }
            
            .about-hero h1 {
                font-size: 2.5rem;
            }
        }

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

            .about-hero {
                height: 300px;
                padding: 0 20px;
            }
            
            .about-hero h1 {
                font-size: 2rem;
            }
            
            .about-hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <a href="#" class="logo">Terasmu</a>
        </div>
    </header>

    <section class="shipping-hero">
        <div class="container">
            <h1>Informasi Pengiriman</h1>
            <p>Belanja nyaman, pengiriman cepat!</p>
        </div>
    </section>

    <div class="container">
        <section class="shipping-content">
            <p>Selamat datang di halaman informasi pengiriman <strong>Terasmu</strong>! Kami berkomitmen untuk memberikan pelayanan pengiriman yang cepat, aman, dan terpercaya agar produk pesanan Anda sampai dengan baik. Berikut adalah detail proses pengiriman kami:</p>

            <h2>1. Proses Pengiriman</h2>
            <p>Setelah Anda melakukan pemesanan, tim kami akan segera memproses dan mengemas produk dengan hati-hati. Berikut tahapannya:</p>
            <ul>
                <li><strong>Pemrosesan Pesanan</strong>: 1–2 hari kerja (tergantung ketersediaan stok).</li>
                <li><strong>Pengemasan</strong>: Produk dikemas dengan bahan yang aman untuk mencegah kerusakan.</li>
                <li><strong>Pengiriman</strong>: Pesanan dikirim via jasa ekspedisi pilihan (JNE, J&T, SiCepat, atau lainnya).</li>
            </ul>

            <div class="info-box">
                <p>Kami selalu memastikan produk dikemas dengan baik untuk menghindari kerusakan selama pengiriman.</p>
            </div>

            <h2>2. Estimasi Waktu Pengiriman</h2>
            <p>Waktu pengiriman bervariasi tergantung lokasi tujuan:</p>
            <ul>
                <li><strong>Jabodetabek</strong>: 1–3 hari kerja.</li>
                <li><strong>Pulau Jawa</strong>: 2–5 hari kerja.</li>
                <li><strong>Luar Jawa & Indonesia Timur</strong>: 3–7 hari kerja.</li>
                <li><strong>Luar Negeri</strong>: 7–14 hari kerja (tergantung kebijakan bea cukai).</li>
            </ul>

            <h2>3. Biaya Pengiriman</h2>
            <p>Biaya pengiriman dihitung otomatis berdasarkan:</p>
            <ul>
                <li><strong>Berat produk</strong></li>
                <li><strong>Lokasi pengiriman</strong></li>
                <li><strong>Jasa ekspedisi yang dipilih</strong></li>
            </ul>
            <p>Anda dapat memilih opsi pengiriman saat checkout (reguler, ekspres, atau same-day delivery untuk area tertentu).</p>
        </section>
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
                <a href="{{ route( 'kebijakanprivasi')}}">Kebijakan Privasi</a>
                <a href="{{ route( 'snk')}}">Syarat dan Ketentuan</a>
                <a href="{{ route( 'kontak')}}">Kontak</a>
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