<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniro - Checkout</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            color: #333;
        }

        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 80px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .logo {
            font-weight: bold;
            font-size: 24px;
            color: #333;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 30px;
            margin-right: 10px;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        .header-icons {
            display: flex;
            gap: 20px;
        }

        .header-icons a {
            color: #333;
            text-decoration: none;
        }

        /* Hero Banner */
        .banner {
            height: 150px;
            background-image: url('/api/placeholder/800/150');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #333;
            text-align: center;
            position: relative;
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            z-index: 1;
        }

        .banner-content {
            position: relative;
            z-index: 2;
        }

        .banner h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .breadcrumb {
            display: flex;
            gap: 10px;
        }

        .breadcrumb a {
            color: #333;
            text-decoration: none;
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
            display: flex;
            gap: 40px;
        }

        .billing-section {
            flex: 1;
        }

        .summary-section {
            flex: 1;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .form-row {
            margin-bottom: 20px;
        }

        .form-row label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-row input, .form-row select, .form-row textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 15px;
        }

        .form-row-split {
            display: flex;
            gap: 20px;
        }

        .form-row-split > div {
            flex: 1;
        }

        /* Summary Table */
        .summary-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .summary-total {
            font-weight: bold;
            font-size: 18px;
            color: #B88E2F;
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid #eee;
            display: flex;
            justify-content: space-between;
        }

        /* Payment Options */
        .payment-option {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .payment-option input {
            margin-right: 10px;
        }

        .payment-description {
            font-size: 14px;
            color: #777;
            margin-top: 5px;
            margin-left: 25px;
        }

        .place-order-btn {
            width: 100%;
            padding: 12px;
            background-color: #B88E2F;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        .privacy-notice {
            font-size: 14px;
            color: #777;
            margin-top: 20px;
            line-height: 1.5;
        }

        .privacy-notice a {
            color: #B88E2F;
            text-decoration: none;
        }

        /* Features Section */
        .features {
            background-color: #FAF4F4;
            padding: 40px 0;
            margin-top: 60px;
        }

        .features-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .feature-icon {
            font-size: 30px;
            color: #B88E2F;
        }

        .feature-text h3 {
            font-size: 16px;
            font-weight: bold;
        }

        .feature-text p {
            font-size: 14px;
            color: #777;
        }

        /* Footer */
        footer {
            background-color: #FAF4F4;
            padding: 60px 0 20px;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-top {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .footer-column a, .footer-column p {
            display: block;
            margin-bottom: 10px;
            color: #333;
            text-decoration: none;
            font-size: 14px;
        }

        .newsletter {
            display: flex;
        }

        .newsletter input {
            padding: 10px;
            border: 1px solid #ddd;
            border-right: none;
            flex: 1;
        }

        .newsletter button {
            padding: 0 15px;
            background-color: #B88E2F;
            color: white;
            border: none;
            cursor: pointer;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <a href="#" class="logo">
            <img src="/api/placeholder/30/30" alt="Furniro Logo"> Furniro
        </a>
        <nav>
            <a href="#">Home</a>
            <a href="#">Shop</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
        <div class="header-icons">
            <a href="#">👤</a>
            <a href="#">🔍</a>
            <a href="#">❤️</a>
            <a href="#">🛒</a>
        </div>
    </header>

    <!-- Banner -->
    <div class="banner">
        <div class="banner-overlay"></div>
        <div class="banner-content">
            <h1>Checkout</h1>
            <div class="breadcrumb">
                <a href="#">Home</a> > Checkout
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <!-- Billing Section -->
        <div class="billing-section">
            <h2>Billing details</h2>
            <form>
                <div class="form-row-split">
                    <div class="form-row">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" required>
                    </div>
                    <div class="form-row">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" required>
                    </div>
                </div>
                <div class="form-row">
                    <label for="company">Company Name (Optional)</label>
                    <input type="text" id="company">
                </div>
                <div class="form-row">
                    <label for="country">Country / Region</label>
                    <select id="country" required>
                        <option value="sri-lanka">Sri Lanka</option>
                        <option value="india">India</option>
                        <option value="usa">USA</option>
                    </select>
                </div>
                <div class="form-row">
                    <label for="street">Street address</label>
                    <input type="text" id="street" required>
                </div>
                <div class="form-row">
                    <label for="city">Town / City</label>
                    <input type="text" id="city" required>
                </div>
                <div class="form-row">
                    <label for="province">Province</label>
                    <select id="province" required>
                        <option value="western">Western Province</option>
                        <option value="central">Central Province</option>
                        <option value="southern">Southern Province</option>
                    </select>
                </div>
                <div class="form-row">
                    <label for="zip">ZIP code</label>
                    <input type="text" id="zip" required>
                </div>
                <div class="form-row">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" required>
                </div>
                <div class="form-row">
                    <label for="email">Email address</label>
                    <input type="email" id="email" required>
                </div>
                <div class="form-row">
                    <label for="notes">Additional information</label>
                    <textarea id="notes" rows="4"></textarea>
                </div>
            </form>
        </div>

        <!-- Order Summary Section -->
        <div class="summary-section">
            <h2>Product</h2>
            <div class="summary-item">
                <div>Asgaard sofa × 1</div>
                <div>Rs. 250,000.00</div>
            </div>
            <div class="summary-item">
                <div>Subtotal</div>
                <div>Rs. 250,000.00</div>
            </div>
            <div class="summary-total">
                <div>Total</div>
                <div>Rs. 250,000.00</div>
            </div>

            <div style="margin-top: 30px;">
                <div class="payment-option">
                    <input type="radio" id="bank-transfer" name="payment" checked>
                    <label for="bank-transfer">Direct Bank Transfer</label>
                </div>
                <div class="payment-description">
                    Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                </div>

                <div class="payment-option">
                    <input type="radio" id="cash" name="payment">
                    <label for="cash">Cash On Delivery</label>
                </div>

                <div class="privacy-notice">
                    Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy</a>.
                </div>

                <button class="place-order-btn">Place order</button>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="features">
        <div class="features-container">
            <div class="feature">
                <div class="feature-icon">🏆</div>
                <div class="feature-text">
                    <h3>High Quality</h3>
                    <p>crafted from top materials</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-icon">✓</div>
                <div class="feature-text">
                    <h3>Warranty Protection</h3>
                    <p>Over 2 years</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-icon">🚚</div>
                <div class="feature-text">
                    <h3>Free Shipping</h3>
                    <p>Order over 150 $</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-icon">📞</div>
                <div class="feature-text">
                    <h3>24 / 7 Support</h3>
                    <p>Dedicated support</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-top">
                <div class="footer-column">
                    <h3>Furniro.</h3>
                    <p>400 University Drive Suite 200 Coral Gables, FL 33134 USA</p>
                </div>
                <div class="footer-column">
                    <h3>Links</h3>
                    <a href="#">Home</a>
                    <a href="#">Shop</a>
                    <a href="#">About</a>
                    <a href="#">Contact</a>
                </div>
                <div class="footer-column">
                    <h3>Help</h3>
                    <a href="#">Payment Options</a>
                    <a href="#">Returns</a>
                    <a href="#">Privacy Policies</a>
                </div>
                <div class="footer-column">
                    <h3>Newsletter</h3>
                    <div class="newsletter">
                        <input type="email" placeholder="Enter Your Email Address">
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>2023 furniro. All rights reserved</p>
            </div>
        </div>
    </footer>
</body>
</html>