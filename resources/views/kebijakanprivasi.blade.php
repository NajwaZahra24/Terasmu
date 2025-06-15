<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebijakan Privasi - Terasmu</title>
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

        .privacy-hero {
            background-color: var(--primary);
            color: var(--white);
            padding: 60px 0;
            text-align: center;
            margin-bottom: 40px;
        }

        .privacy-hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .privacy-content {
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
        }

        .highlight-box {
            background-color: var(--secondary);
            border-left: 4px solid var(--primary);
            padding: 20px;
            margin: 25px 0;
            border-radius: 0 4px 4px 0;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .data-table th, .data-table td {
            border: 1px solid var(--light-gray);
            padding: 12px;
            text-align: left;
        }

        .data-table th {
            background-color: var(--primary);
            color: var(--white);
        }

        .data-table tr:nth-child(even) {
            background-color: var(--secondary);
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

    <section class="privacy-hero">
        <div class="container">
            <h1>Kebijakan Privasi</h1>
            <p>Bagaimana kami melindungi data pribadi Anda</p>
        </div>
    </section>

    <div class="container">
        <section class="privacy-content">
            <p><em>Terakhir diperbarui: 1 Januari 2024</em></p>
            
            <p>Di Terasmu, kami menghargai dan melindungi privasi Anda. Kebijakan privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, melindungi, dan mengungkapkan informasi yang kami peroleh dari Anda melalui website kami.</p>

            <div class="highlight-box">
                <p><strong>Penting:</strong> Dengan menggunakan layanan Terasmu, Anda menyetujui pengumpulan dan penggunaan informasi sesuai dengan kebijakan ini.</p>
            </div>

            <h2>1. Informasi yang Kami Kumpulkan</h2>
            <p>Kami dapat mengumpulkan berbagai jenis informasi untuk berbagai tujuan:</p>
            
            <h3>Data Pribadi</h3>
            <ul>
                <li>Nama lengkap</li>
                <li>Alamat email</li>
                <li>Nomor telepon</li>
                <li>Alamat pengiriman</li>
                <li>Informasi pembayaran (diamankan dengan enkripsi)</li>
            </ul>
            
            <h3>Data Non-Pribadi</h3>
            <ul>
                <li>Data penggunaan website</li>
                <li>Informasi perangkat dan browser</li>
                <li>Alamat IP</li>
                <li>Cookie dan teknologi pelacakan serupa</li>
            </ul>

            <h2>2. Bagaimana Kami Menggunakan Data Anda</h2>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Tujuan</th>
                        <th>Jenis Data</th>
                        <th>Dasar Hukum</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Memproses pesanan</td>
                        <td>Nama, alamat, kontak, pembayaran</td>
                        <td>Kontrak</td>
                    </tr>
                    <tr>
                        <td>Layanan pelanggan</td>
                        <td>Kontak, riwayat transaksi</td>
                        <td>Kepentingan sah</td>
                    </tr>
                    <tr>
                        <td>Peningkatan layanan</td>
                        <td>Data penggunaan, feedback</td>
                        <td>Kepentingan sah</td>
                    </tr>
                    <tr>
                        <td>Pemasaran</td>
                        <td>Email, preferensi</td>
                        <td>Persetujuan</td>
                    </tr>
                </tbody>
            </table>

            <h2>3. Perlindungan Data</h2>
            <p>Kami menerapkan langkah-langkah keamanan teknis dan organisasional yang sesuai untuk melindungi data Anda:</p>
            <ul>
                <li>Enkripsi data sensitif</li>
                <li>Pembatasan akses data</li>
                <li>Audit keamanan berkala</li>
                <li>Pelatihan staf tentang privasi data</li>
            </ul>

            <h2>4. Berbagi Data dengan Pihak Ketiga</h2>
            <p>Kami dapat membagikan data dengan:</p>
            <ul>
                <li><strong>Penyedia jasa pengiriman</strong> - untuk pengiriman produk</li>
                <li><strong>Prosesor pembayaran</strong> - untuk memproses transaksi</li>
                <li><strong>Penyedia layanan IT</strong> - untuk pemeliharaan sistem</li>
                <li><strong>Otoritas hukum</strong> - jika diwajibkan oleh hukum</li>
            </ul>
            <p>Kami memastikan semua pihak ketiga mematuhi standar perlindungan data yang ketat.</p>

            <h2>5. Cookie dan Teknologi Pelacakan</h2>
            <p>Kami menggunakan cookie untuk:</p>
            <ul>
                <li>Mengaktifkan fungsi dasar website</li>
                <li>Menganalisis penggunaan website</li>
                <li>Menyesuaikan pengalaman pengguna</li>
                <li>Iklan yang relevan</li>
            </ul>
            <p>Anda dapat mengelola preferensi cookie melalui pengaturan browser Anda.</p>

            <h2>6. Hak-Hak Anda</h2>
            <p>Anda memiliki hak untuk:</p>
            <ul>
                <li>Mengakses data pribadi Anda</li>
                <li>Memperbaiki data yang tidak akurat</li>
                <li>Menghapus data ("hak untuk dilupakan")</li>
                <li>Membatasi pemrosesan data</li>
                <li>Menolak pemrosesan data</li>
                <li>Portabilitas data</li>
                <li>Mencabut persetujuan</li>
            </ul>
            <p>Untuk menggunakan hak-hak ini, silakan hubungi kami melalui informasi kontak di bawah.</p>

            <h2>7. Penyimpanan Data</h2>
            <p>Kami menyimpan data pribadi Anda hanya selama:</p>
            <ul>
                <li>Diperlukan untuk tujuan pengumpulan</li>
                <li>Diwajibkan oleh hukum atau peraturan</li>
                <li>Selama akun Anda aktif (untuk data akun)</li>
            </ul>

            <h2>8. Perubahan Kebijakan Privasi</h2>
            <p>Kami dapat memperbarui kebijakan privasi ini dari waktu ke waktu. Perubahan akan diberitahukan melalui website kami.</p>

            <h2>9. Hubungi Kami</h2>
            <p>Untuk pertanyaan tentang kebijakan privasi atau permintaan data pribadi, hubungi:</p>
            <p><strong>Petugas Perlindungan Data</strong><br>
            📧 Email: privacy@terasmu.com<br>
            📱 WhatsApp: +62 812-3456-7890<br>
            📠 Telepon: (021) 12345678<br>
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