<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Terasmu</title>
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

        .faq-hero {
            background-color: var(--primary);
            color: var(--white);
            padding: 60px 0;
            text-align: center;
            margin-bottom: 40px;
        }

        .faq-hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .faq-content {
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 40px;
            margin-bottom: 40px;
        }

        .faq-category {
            margin-bottom: 40px;
        }

        .faq-category h2 {
            color: var(--primary);
            font-size: 24px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--light-gray);
        }

        .faq-item {
            margin-bottom: 15px;
            border: 1px solid var(--light-gray);
            border-radius: 6px;
            overflow: hidden;
        }

        .faq-question {
            background-color: var(--secondary);
            padding: 15px 20px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-question::after {
            content: '+';
            font-size: 20px;
            color: var(--primary);
        }

        .faq-question.active::after {
            content: '-';
        }

        .faq-answer {
            padding: 0;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .faq-answer-content {
            padding: 20px;
        }

        .search-box {
            margin-bottom: 30px;
            position: relative;
        }

        .search-box input {
            width: 100%;
            padding: 12px 20px;
            border: 1px solid var(--light-gray);
            border-radius: 30px;
            font-size: 16px;
            padding-right: 45px;
        }

        .search-box input:focus {
            outline: none;
            border-color: var(--primary);
        }

        .search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary);
        }

        .contact-box {
            background-color: var(--secondary);
            border-left: 4px solid var(--primary);
            padding: 20px;
            margin-top: 30px;
            border-radius: 0 8px 8px 0;
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

    <section class="faq-hero">
        <div class="container">
            <h1>Pertanyaan Umum (FAQ)</h1>
            <p>Temukan jawaban atas pertanyaan Anda di sini</p>
        </div>
    </section>

    <div class="container">
        <section class="faq-content">
            <div class="search-box">
                <input type="text" placeholder="Cari pertanyaan...">
                <span class="search-icon">🔍</span>
            </div>

            <div class="faq-category">
                <h2>Pemesanan & Pembayaran</h2>
                
                <div class="faq-item">
                    <div class="faq-question">Bagaimana cara memesan produk di Terasmu?</div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Anda dapat memesan produk dengan mudah melalui website kami:</p>
                            <ol>
                                <li>Pilih produk yang ingin dibeli</li>
                                <li>Klik "Tambahkan ke Keranjang"</li>
                                <li>Pergi ke halaman keranjang belanja</li>
                                <li>Klik "Lanjut ke Pembayaran"</li>
                                <li>Isi data pengiriman dan pilih metode pembayaran</li>
                                <li>Selesaikan pembayaran</li>
                            </ol>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">Metode pembayaran apa saja yang diterima?</div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Kami menerima berbagai metode pembayaran:</p>
                            <ul>
                                <li>Transfer Bank (BCA, Mandiri, BRI, BNI, dll)</li>
                                <li>E-Wallet (OVO, Dana, Gopay, LinkAja)</li>
                                <li>Kartu Kredit (Visa, Mastercard, JCB)</li>
                                <li>Pembayaran di Tempat (COD) untuk area tertentu</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">Berapa lama batas waktu pembayaran?</div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Batas waktu pembayaran adalah 24 jam setelah pemesanan. Jika pembayaran tidak diterima dalam waktu tersebut, pesanan akan otomatis dibatalkan.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq-category">
                <h2>Pengiriman</h2>
                
                <div class="faq-item">
                    <div class="faq-question">Berapa lama waktu pengiriman?</div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Waktu pengiriman bervariasi tergantung lokasi:</p>
                            <ul>
                                <li><strong>Jabodetabek:</strong> 1-3 hari kerja</li>
                                <li><strong>Pulau Jawa:</strong> 2-5 hari kerja</li>
                                <li><strong>Luar Jawa:</strong> 3-7 hari kerja</li>
                                <li><strong>Internasional:</strong> 7-14 hari kerja</li>
                            </ul>
                            <p>Waktu di atas belum termasuk waktu proses pesanan (1-2 hari kerja).</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">Bagaimana cara melacak pesanan saya?</div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Anda dapat melacak pesanan melalui:</p>
                            <ol>
                                <li>Email konfirmasi pengiriman yang kami kirimkan</li>
                                <li>Halaman "Lacak Pesanan" di website kami</li>
                                <li>Website resmi jasa pengiriman yang digunakan</li>
                            </ol>
                            <p>Nomor resi akan dikirimkan via email/SMS setelah pesanan dikirim.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">Apakah tersedia pengiriman same-day?</div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Ya, kami menyediakan pengiriman same-day untuk area Jabodetabek dengan ketentuan:</p>
                            <ul>
                                <li>Pesanan dilakukan sebelum jam 12.00 WIB</li>
                                <li>Produk tersedia di gudang terdekat</li>
                                <li>Biaya pengiriman tambahan akan dikenakan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq-category">
                <h2>Pengembalian & Refund</h2>
                
                <div class="faq-item">
                    <div class="faq-question">Bagaimana prosedur pengembalian produk?</div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Berikut prosedur pengembalian produk:</p>
                            <ol>
                                <li>Hubungi Customer Service dalam 7 hari setelah barang diterima</li>
                                <li>Kirim foto produk dan bukti pembelian</li>
                                <li>Tim kami akan verifikasi kelayakan pengembalian</li>
                                <li>Jika disetujui, kirim produk ke alamat yang kami berikan</li>
                                <li>Kami akan proses refund setelah produk diterima</li>
                            </ol>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">Berapa lama proses refund?</div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Waktu proses refund tergantung metode pembayaran:</p>
                            <ul>
                                <li>Transfer Bank: 3-5 hari kerja</li>
                                <li>E-Wallet: 1-3 hari kerja</li>
                                <li>Kartu Kredit: 5-7 hari kerja</li>
                            </ul>
                            <p>Waktu dihitung setelah produk pengembalian kami terima dan verifikasi.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq-category">
                <h2>Akun & Keamanan</h2>
                
                <div class="faq-item">
                    <div class="faq-question">Bagaimana cara reset password?</div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Untuk reset password:</p>
                            <ol>
                                <li>Klik "Lupa Password" di halaman login</li>
                                <li>Masukkan alamat email terdaftar</li>
                                <li>Buka email dan klik link reset password</li>
                                <li>Buat password baru</li>
                            </ol>
                            <p>Jika tidak menerima email, periksa folder spam atau hubungi Customer Service.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">Bagaimana jika akun saya diretas?</div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Jika mencurigai aktivitas tidak sah di akun Anda:</p>
                            <ol>
                                <li>Segera reset password</li>
                                <li>Periksa riwayat transaksi</li>
                                <3>Hubungi Customer Service jika ada transaksi mencurigakan</li>
                                <li>Laporkan ke authorities jika diperlukan</li>
                            </ol>
                            <p>Kami tidak pernah meminta password atau OTP melalui telepon/email.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-box">
                <h3>Tidak menemukan jawaban?</h3>
                <p>Tim Customer Service kami siap membantu Anda:</p>
                <p>📧 Email: cs@terasmu.com<br>
                📱 WhatsApp: +62 812-3456-7890<br>
                🕒 Jam Operasional: Senin-Minggu, 08.00-20.00 WIB</p>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    const answer = question.nextElementSibling;
                    const isActive = question.classList.contains('active');
                    
                    // Close all answers first
                    document.querySelectorAll('.faq-answer').forEach(ans => {
                        ans.style.maxHeight = null;
                    });
                    document.querySelectorAll('.faq-question').forEach(q => {
                        q.classList.remove('active');
                    });
                    
                    // Toggle current answer
                    if (!isActive) {
                        question.classList.add('active');
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                    }
                });
            });

            // Search functionality
            const searchInput = document.querySelector('.search-box input');
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                const faqItems = document.querySelectorAll('.faq-item');
                
                faqItems.forEach(item => {
                    const question = item.querySelector('.faq-question').textContent.toLowerCase();
                    const answer = item.querySelector('.faq-answer-content').textContent.toLowerCase();
                    
                    if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>