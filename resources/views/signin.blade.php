<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            min-height: 100vh;
            background-color: #fff;
        }

        .login-container {
            display: flex;
            width: 100%;
        }

        .form-section {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .back-arrow {
            position: absolute;
            top: 40px;
            left: 40px;
            font-size: 24px;
            cursor: pointer;
            color: #000;
            text-decoration: none;
        }

        .image-section {
            flex: 1;
            background-image: url('/api/placeholder/800/600');
            background-size: cover;
            background-position: center;
            display: none;
        }

        .title {
            font-size: 48px;
            color: #b08d5d;
            margin-bottom: 20px;
            font-weight: bold;
            margin-top: 40px;
        }

        .subtitle {
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: bold;
            color: #000;
        }

        .description {
            color: #666;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 15px;
            border: none;
            background-color: #f1f1f1;
            border-radius: 5px;
            font-size: 16px;
        }

        .password-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
        }

        .forgot-password {
            text-align: right;
        }

        .forgot-password a {
            color: #b08d5d;
            text-decoration: none;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .checkbox-container input {
            margin-right: 10px;
            width: 20px;
            height: 20px;
        }

        .btn-login {
            width: 100%;
            padding: 15px;
            background-color: #b08d5d;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 30px;
        }

        .signup-link {
            text-align: center;
        }

        .signup-link a {
            color: #b08d5d;
            text-decoration: none;
            font-weight: 500;
        }

        @media (min-width: 768px) {
            .image-section {
                display: block;
            }
            
            .form-section {
                max-width: 500px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="form-section">
            <a href="#" class="back-arrow">←</a>
            
            <h1 class="title">Sign In</h1>
            <h2 class="subtitle">Masuk ke akun kamu</h2>
            <p class="description">Silahkan isi form sesuai dengan data diri anda!</p>
            
            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Masukkan email anda">
                </div>
                
                <div class="form-group">
                    <div class="password-container">
                        <label for="password">Kata Sandi</label>
                        <div class="forgot-password">
                            <a href="#">Lupa Kata Sandi?</a>
                        </div>
                    </div>
                    <input type="password" id="password" class="form-control" placeholder="Masukkan password anda">
                </div>
                
                <div class="checkbox-container">
                    <input type="checkbox" id="remember">
                    <label for="remember">Ingat saya</label>
                </div>
                
                <button type="submit" class="btn-login">Masuk</button>
                
                <div class="signup-link">
                    <span>Belum punya akun? </span>
                    <a href="#">Daftar</a>
                </div>
            </form>
        </div>
        
        <div class="image-section"></div>
    </div>
</body>
</html>