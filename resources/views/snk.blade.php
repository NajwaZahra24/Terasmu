<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat & Ketentuan - Terasmu</title>
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

        .terms-hero {
            background-color: var(--primary);
            color: var(--white);
            padding: 60px 0;
            text-align: center;
            margin-bottom: 40px;
        }

        .terms-hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .terms-content {
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 40px;
            margin-bottom: 40px;
        }

        h2 {
            color: var(--primary);
            margin-top: 40px;
            margin-bottom: 20px;
            font-size: 24px;
            padding-bottom: 8px;
            border-bottom: 2px solid var(--light-gray);
        }

        h3 {
            color: var(--accent);
            margin-top: 30px;
            font-size: 20px;
        }

        p, ul, ol {
            margin-bottom: 15px;
        }

        ul, ol {
            padding-left: 25px;
        }

        li {
            margin-bottom: 10px;
            position: relative;
        }

        .note-box {
            background-color: var(--secondary);
            border-left: 4px solid var(--primary);
            padding: 20px;
            margin: 25px 0;
            border-radius: 0 4px 4px 0;
        }

        /* Footer Styles */
        footer {
            background-color: var(--accent);
            color: var(--secondary);
            padding: 60px 0 0;
            margin-top: 50px;
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

            .contact-container {
                margin: 20px;
                padding: 25px;
            }
            
            .contact-item {
                padding: 15px 20px;
            }
            
            .contact-item i {
                font-size: 1.5em;
                margin-right: 15px;
            }
            
            .contact-item a {
                font-size: 1em;
            }
        }
        
        @media (max-width: 480px) {
            .contact-item {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }
            
            .contact-item i {
                margin-right: 0;
                margin-bottom: 10px;
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

    <section class="terms-hero">
        <div class="container">
            <h1>Syarat & Ketentuan</h1>
            <p>Ketentuan penggunaan layanan Terasmu</p>
        </div>
    </section>

    <div class="container">
        <section class="terms-content">
            <p>Terakhir diperbarui: 1 Januari 2024</p>
            
            <p>Dengan mengakses dan menggunakan website Terasmu, Anda setuju untuk terikat oleh syarat dan ketentuan berikut. Harap baca dengan seksama sebelum melakukan transaksi.</p>

            <h2>1. Penggunaan Layanan</h2>
            <ul>
                <li>Anda setuju menggunakan layanan Terasmu hanya untuk tujuan yang sah</li>
                <li>Dilarang menggunakan website untuk aktivitas ilegal atau melanggar hukum</li>
                <li>Anda bertanggung jawab penuh atas akun dan aktivitas yang dilakukan melalui akun Anda</li>
            </ul>

            <h2>2. Akun Pengguna</h2>
            <ul>
                <li>Anda harus berusia minimal 18 tahun atau memiliki izin orang tua/wali untuk membuat akun</li>
                <li>Informasi yang Anda berikan harus akurat dan terbaru</li>
                <li>Anda bertanggung jawab untuk menjaga kerahasiaan informasi akun Anda</li>
            </ul>

            <h2>3. Pemesanan & Pembayaran</h2>
            <ul>
                <li>Harga produk dapat berubah sewaktu-waktu tanpa pemberitahuan</li>
                <li>Pesanan dianggap sah setelah pembayaran lunas diterima</li>
                <li>Metode pembayaran yang tersedia:
                    <ul>
                        <li>Transfer Bank</li>
                        <li>E-Wallet (OVO, Dana, dll)</li>
                        <li>Kartu Kredit/Debit</li>
                    </ul>
                </li>
            </ul>

            <div class="note-box">
                <p><strong>Perhatian:</strong> Terasmu tidak pernah meminta informasi kartu kredit atau OTP melalui telepon/email di luar proses checkout resmi.</p>
            </div>

            <h2>4. Pengiriman</h2>
            <ul>
                <li>Waktu pengiriman tergantung lokasi tujuan dan ketersediaan produk</li>
                <li>Resiko kerusakan/hilang selama pengiriman menjadi tanggung jawab kami setelah konfirmasi penerimaan</li>
                <li>Biaya pengiriman ditanggung pembeli kecuali promosi gratis ongkir</li>
            </ul>

            <h2>5. Pengembalian & Refund</h2>
            <ul>
                <li>Produk dapat dikembalikan dalam kondisi original dalam waktu 7 hari</li>
                <li>Produk yang sudah digunakan/dibuka tidak dapat dikembalikan</li>
                <li>Proses refund membutuhkan waktu 3-10 hari kerja tergantung metode pembayaran</li>
            </ul>

            <h2>6. Hak Kekayaan Intelektual</h2>
            <ul>
                <li>Seluruh konten di website Terasmu dilindungi hak cipta</li>
                <li>Dilarang memperbanyak, mendistribusikan, atau menggunakan konten kami tanpa izin tertulis</li>
            </ul>

            <h2>7. Perubahan Syarat & Ketentuan</h2>
            <p>Kami dapat mengubah syarat dan ketentuan ini sewaktu-waktu. Perubahan akan efektif segera setelah diposting di halaman ini.</p>

            <h2>8. Kontak</h2>
            <p>Untuk pertanyaan mengenai syarat dan ketentuan ini, silakan hubungi:</p>
            <p>📧 Email: legal@terasmu.com<br>
            📱 WhatsApp: +62 812-3456-7890<br>
            🏢 Alamat: Jl. Contoh No. 123, Jakarta Selatan, Indonesia</p>
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
                <a href="{{ route('tentangkami') }}">Tentang Kami</a>
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