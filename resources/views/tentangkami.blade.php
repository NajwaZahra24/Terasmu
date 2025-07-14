<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Terasmu</title>
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

        .nav-item.active {
            color: var(--primary);
        }

        .nav-item.active::after {
            transform: translateX(0);
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

        /* About Us Custom Styles - Sesuai yang Anda minta */
        .about-hero {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1556909212-d5b604d0c90d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--white);
            margin-bottom: 60px;
        }

        .about-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .about-hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto 60px;
            padding: 0 20px;
        }

        .about-section {
            display: flex;
            align-items: center;
            gap: 50px;
            margin-bottom: 80px;
        }

        .about-section.reverse {
            flex-direction: row-reverse;
        }

        .about-img {
            flex: 1;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .about-img img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s;
        }

        .about-img:hover img {
            transform: scale(1.05);
        }

        .about-content {
            flex: 1;
        }

        .about-content h2 {
            font-size: 2.2rem;
            color: var(--primary);
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .about-content h2::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 80px;
            height: 3px;
            background-color: var(--primary);
        }

        .about-content p {
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .values-section {
            text-align: center;
            margin-bottom: 80px;
        }

        .values-section h2 {
            font-size: 2.5rem;
            margin-bottom: 50px;
            color: var(--accent);
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .value-card {
            background: var(--white);
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .value-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .value-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--accent);
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
    <!-- Header with Enhanced Navbar - Diambil dari kode Anda -->
    <header>
        <div class="header-container">
            <a href="#" class="logo">
                <i class="fas fa-couch"></i>
                TerasMu
            </a>

            <nav class="nav-links">
                <a href="/" class="nav-item">Beranda</a>
                <a href="{{ route('katalog') }}" class="nav-item">Katalog</a>
                <a href="#" class="nav-item active">Tentang kami</a>
                <a href="{{ route('kontak') }}" class="nav-item">Kontak</a>
            </nav>            

            <div class="icons">
                <a href="{{ route('login')}}" id="user-btn"><i class="fas fa-user"></i></a>
                <a href="#" id="menu-btn"><i class="fas fa-bars"></i></a>
            </div>
        </div>
    </header>

    <!-- About Us Hero Section -->
    <section class="about-hero">
        <div>
            <h1>Tentang Terasmu</h1>
            <p>Menghadirkan furnitur berkualitas dengan desain modern untuk membuat rumah Anda lebih nyaman dan elegan</p>
        </div>
    </section>

    <!-- About Us Content -->
    <div class="about-container">
        <section class="about-section">
            <div class="about-img">
                <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Sejarah Terasmu">
            </div>
            <div class="about-content">
                <h2>Deskripsi Terasmu</h2>
                <p>Terasmu hadir untuk membawa kenyamanan dan gaya ke dalam rumah Anda. Kami adalah brand furnitur lokal yang didirikan dengan visi untuk menyediakan furnitur berkualitas tinggi, fungsional, dan terjangkau untuk setiap rumah di Indonesia. Dengan desain yang modern dan perhatian pada detail, setiap produk kami dirancang untuk memenuhi kebutuhan dan gaya hidup Anda.</p>
                <p>Dari ruang tamu hingga kamar tidur, Terasmu menawarkan berbagai pilihan furnitur yang dapat mempercantik dan membuat rumah Anda lebih nyaman. Kami berkomitmen untuk memberikan pengalaman belanja yang mudah, aman, dan memuaskan. Temukan furnitur impian Anda hanya di Terasmu.</p>
            </div>
        </section>

        <section class="about-section reverse">
            <div class="about-img">
                <img src="https://images.unsplash.com/photo-1600585152220-90363fe7e115?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Proses Produksi">
            </div>
            <div class="about-content">
                <h2>Kualitas yang Kami Tawarkan</h2>
                <p>Kami menggunakan bahan-bahan terbaik yang dipilih dengan cermat untuk memastikan daya tahan dan keindahan produk kami. Kayu solid berkualitas tinggi, kain tahan lama, dan material premium lainnya menjadi pilihan utama kami.</p>
                <p>Setiap produk Terasmu melalui proses kontrol kualitas yang ketat sebelum sampai ke tangan Anda. Tim ahli kami memastikan bahwa setiap detail, mulai dari sambungan kayu hingga finishing, memenuhi standar tertinggi.</p>
            </div>
        </section>

        <section class="values-section">
            <h2>Nilai-Nilai Kami</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Ramah Lingkungan</h3>
                    <p>Kami berkomitmen untuk menggunakan bahan yang berkelanjutan dan proses produksi yang ramah lingkungan.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Pelanggan Pertama</h3>
                    <p>Kepuasan pelanggan adalah prioritas utama kami. Kami selalu mendengarkan dan berinovasi berdasarkan kebutuhan Anda.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3>Kualitas Premium</h3>
                    <p>Kami tidak pernah berkompromi dengan kualitas. Setiap produk dibuat untuk bertahan lama dan tetap indah.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Desain Inovatif</h3>
                    <p>Tim desainer kami terus menciptakan solusi furnitur kreatif yang memadukan gaya dan fungsi.</p>
                </div>
            </div>
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

    <script>
        // Mobile Menu Toggle - Diambil dari kode Anda
        const menuBtn = document.getElementById('menu-btn');
        const navLinks = document.querySelector('.nav-links');

        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>
</body>
</html>