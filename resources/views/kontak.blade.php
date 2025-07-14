<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Terasmu</title>
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

        a {
            text-decoration: none;
            color: black;
        }

        body {
            background-color: var(--secondary);
            color: var(--text-color);
            line-height: 1.6;
        }

        header {
            background-color: var(--white);
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 1rem 5%;
            border-bottom: 1px solid rgba(0,0,0,0.05); 
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

        /* Enhanced Kontak Kami Section */
        .contact-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 40px;
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .contact-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .contact-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .contact-header h1 {
            font-size: 2.5em;
            color: var(--accent);
            margin-bottom: 10px;
            font-weight: 600;
        }

        .contact-header p {
            color: var(--accent);
            opacity: 0.8;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            padding: 20px 30px;
            background: var(--white);
            border-radius: 12px;
            transition: all 0.3s ease;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border: 1px solid rgba(166, 124, 82, 0.1);
        }

        .contact-item:hover {
            transform: translateX(10px);
            box-shadow: 0 8px 20px rgba(166, 124, 82, 0.15);
            border-color: rgba(166, 124, 82, 0.3);
            background-color: rgba(166, 124, 82, 0.03);
        }

        .contact-item:active {
            transform: translateX(10px) scale(0.98);
        }

        .contact-item i {
            font-size: 1.8em;
            margin-right: 20px;
            color: var(--primary);
            width: 40px;
            text-align: center;
        }

        .contact-item a {
            font-size: 1.2em;
            color: var(--accent);
            transition: color 0.3s;
            flex-grow: 1;
        }

        .contact-item:hover a {
            color: var(--primary);
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
    <!-- Header with Navbar (Tanpa bayangan) -->
    <header>
        <div class="header-container">
            <a href="#" class="logo">
                <i class="fas fa-couch"></i>
                TerasMu
            </a>

            <nav class="nav-links">
                <a href="/" class="nav-item">Beranda</a>
                <a href="{{ route('katalog') }}" class="nav-item">Katalog</a>
                <a href="{{ route('tentangkami') }}"class="nav-item">Tentang kami</a>
                <a href="{{ route( 'kontak')}}"  class="nav-item">Kontak</a>
            </nav>           

            <div class="icons">
                <a href="{{ route('login')}}" id="user-btn"><i class="fas fa-user"></i></a>
                <a href="#" id="menu-btn"><i class="fas fa-bars"></i></a>
            </div>
        </div>
    </header>

    <!-- Kontak Kami Section - Enhanced -->
    <div class="contact-container">
        <div class="contact-header">
            <h1>Kontak Kami</h1>
            <p>Hubungi kami melalui berbagai platform berikut</p>
        </div>
        <div class="contact-info">
            <div class="contact-item" onclick="window.location.href='https://web.whatsapp.com'">
                <i class="fa-brands fa-whatsapp"></i>
                <a href="https://web.whatsapp.com">WhatsApp: +62 123 456 789</a>
            </div>
            <div class="contact-item" onclick="window.location.href='https://www.instagram.com/smktelkomsda/'">
                <i class="fab fa-instagram"></i>
                <a href="https://www.instagram.com/smktelkomsda/">Instagram: @terasmu.id</a>
            </div>
            <div class="contact-item" onclick="window.location.href='https://www.facebook.com/p/SMK-Telkom-Sidoarjo-100047190761645/'">
                <i class="fa-brands fa-facebook-f"></i>
                <a href="https://www.facebook.com/p/SMK-Telkom-Sidoarjo-100047190761645/">Facebook: @terasmu.id</a>
            </div>
            <div class="contact-item" onclick="window.location.href='https://mail.google.com/mail/u/0/'">
                <i class="fa-regular fa-envelope"></i>
                <a href="https://mail.google.com/mail/u/0/">Email: terasmu@gmail.com</a>
            </div>
        </div>
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
        // Mobile Menu Toggle
        const menuBtn = document.getElementById('menu-btn');
        const navLinks = document.querySelector('.nav-links');

        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
        
        // Make entire contact items clickable
        document.querySelectorAll('.contact-item').forEach(item => {
            item.addEventListener('click', function() {
                const link = this.querySelector('a');
                if (link) {
                    window.location.href = link.href;
                }
            });
        });
    </script>
</body>
</html>