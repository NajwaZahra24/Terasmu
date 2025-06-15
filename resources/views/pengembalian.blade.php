<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengembalian Produk - Terasmu</title>
    <style>
        :root {
            --primary: #A67C52;  /* Warna elemen utama */
            --secondary: #F7F3EE;  /* Warna latar utama */
            --accent: #2E2E2E;  /* Warna aksen dan teks */
            --light-gray: #e0e0e0;
            --white: #ffffff;
            --text-color: #2E2E2E;
            --error: #D32F2F;
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

        .return-hero {
            background-color: var(--primary);
            color: var(--white);
            padding: 60px 0;
            text-align: center;
            margin-bottom: 40px;
        }

        .return-hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .return-content {
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

        h3 {
            color: var(--accent);
            margin-top: 25px;
            font-size: 20px;
        }

        ul, ol {
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        .note-box {
            background-color: var(--secondary);
            border-left: 4px solid var(--primary);
            padding: 20px;
            margin: 20px 0;
            border-radius: 0 4px 4px 0;
        }

        .warning-box {
            background-color: #FFF3E0;
            border-left: 4px solid var(--error);
            padding: 20px;
            margin: 20px 0;
            border-radius: 0 4px 4px 0;
        }

        .step-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }

        .step-card {
            background-color: var(--secondary);
            padding: 20px;
            border-radius: 8px;
            border-top: 4px solid var(--primary);
            transition: transform 0.3s ease;
        }

        .step-card:hover {
            transform: translateY(-5px);
        }

        .step-number {
            background-color: var(--primary);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-weight: bold;
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

    <section class="return-hero">
        <div class="container">
            <h1>Kebijakan Pengembalian Produk</h1>
            <p>Kepuasan Anda adalah prioritas kami</p>
        </div>
    </section>

    <div class="container">
        <section class="return-content">
            <p>Di <strong>Terasmu</strong>, kami berkomitmen untuk memberikan produk terbaik dan pelayanan yang memuaskan. Jika Anda tidak sepenuhnya puas dengan pembelian Anda, berikut kebijakan pengembalian kami:</p>

            <h2>Syarat Pengembalian</h2>
            <p>Produk dapat dikembalikan jika memenuhi syarat berikut:</p>
            <ul>
                <li>Produk dalam kondisi asli (belum digunakan/dipakai)</li>
                <li>Kemasan original masih lengkap dan dalam kondisi baik</li>
                <li>Masuk dalam masa garansi 7 hari setelah produk diterima</li>
                <li>Disertai bukti pembelian (invoice/resi)</li>
                <li>Produk tidak termasuk dalam kategori non-returnable</li>
            </ul>

            <div class="warning-box">
                <h3>Produk Yang Tidak Dapat Dikembalikan</h3>
                <ul>
                    <li>Produk yang sudah digunakan/dipakai</li>
                    <li>Produk personal hygiene (seperti sikat gigi, produk kecantikan yang sudah dibuka)</li>
                    <li>Produk digital</li>
                    <li>Produk yang sudah dimodifikasi</li>
                </ul>
            </div>

            <h2>Proses Pengembalian</h2>
            <div class="step-container">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <strong>Hubungi Customer Service</strong>
                    <p>Laporkan pengembalian melalui WhatsApp/Email dalam waktu 7 hari setelah barang diterima</p>
                </div>
                <div class="step-card">
                    <div class="step-number">2</div>
                    <strong>Verifikasi</strong>
                    <p>Tim kami akan memverifikasi kelayakan pengembalian dalam 1-2 hari kerja</p>
                </div>
                <div class="step-card">
                    <div class="step-number">3</div>
                    <strong>Pengembalian Produk</strong>
                    <p>Setelah disetujui, kirim produk ke alamat yang kami berikan</p>
                </div>
                <div class="step-card">
                    <div class="step-number">4</div>
                    <strong>Proses Refund/Penggantian</strong>
                    <p>Setelah produk kami terima, kami akan proses refund/penggantian dalam 3-5 hari kerja</p>
                </div>
            </div>

            <h2>Biaya Pengembalian</h2>
            <ul>
                <li><strong>Kesalahan kami</strong> (produk cacat/rusak/salah kirim): Biaya pengembalian ditanggung oleh Terasmu</li>
                <li><strong>Keinginan pelanggan</strong> (tidak sesuai ekspektasi, perubahan pikiran): Biaya pengembalian ditanggung oleh pelanggan</li>
            </ul>

            <h2>Metode Pengembalian Dana</h2>
            <p>Dana akan dikembalikan melalui metode pembayaran asli. Proses refund membutuhkan waktu:</p>
            <ul>
                <li>Transfer Bank: 3-5 hari kerja</li>
                <li>E-Wallet: 1-3 hari kerja</li>
                <li>Kartu Kredit: 5-7 hari kerja</li>
            </ul>

            <div class="note-box">
                <h3>Butuh Bantuan?</h3>
                <p>Hubungi tim customer service kami:</p>
                <p>📧 Email: cs@terasmu.com<br>
                📱 WhatsApp: +62 812-3456-7890<br>
                🕒 Jam Operasional: Senin-Jumat, 09.00-17.00 WIB</p>
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