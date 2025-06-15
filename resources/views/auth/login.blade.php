
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            display: flex;
            min-height: 100vh;
        }

        .container {
            display: flex;
            width: 100%;
        }

        .form-container {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            background-color: white;
        }

        .image-container {
            flex: 1;
            background-color: #333;
            display: none;
        }

        @media (min-width: 768px) {
            .image-container {
                display: block;
            }
        }

        .back-button {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            background-color: #b08968;
            border: none;
            cursor: pointer;
            font-size: 18px;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 8px;
        }

        h1 {
            font-size: 42px;
            color: #b08968;
            margin-bottom: 20px;
            font-weight: 600;
        }

        h2 {
            font-size: 26px;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        p {
            color: #666;
            margin-bottom: 30px;
        }

        .input-group {
            margin-bottom: 20px;
            position: relative;
        }

        .input-group-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        label {
            display: block;
            font-weight: 500;
        }

        .forgot-password {
            color: #b08968;
            text-decoration: none;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            background-color: #f9f9f9;
            font-size: 16px;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .checkbox-container input[type="checkbox"] {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }
        
        .checkbox-label {
            font-size: 14px;
            color: #333;
        }

        button {
            background-color: #b08968;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        button:hover {
            background-color: #a07958;
        }
        
        .register-link {
            text-align: center;
            margin-top: 20px;
        }
        
        .register-link a {
            color: #b08968;
            text-decoration: none;
            font-weight: 500;
        }

        .loginregist {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <a href="{{ route('home') }}" class="back-button">
                ←
            </a>
            <h1>Login</h1>
            
            <h2>Masuk ke akun kamu</h2>
            <p>Silahkan isi form sesuai dengan data diri anda!</p>
            
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Masukkan email anda">
            </div>
            
            <div class="input-group">
                <div class="input-group-header">
                    <label for="password">Kata Sandi</label>
                    <a href="#" class="forgot-password">Lupa Kata Sandi?</a>
                </div>
                <input type="password" id="password" placeholder="Masukkan password anda">
            </div>
            
            <div class="checkbox-container">
                <input type="checkbox" id="remember">
                <label for="remember" class="checkbox-label">Ingat saya</label>
            </div>
            
            <button type="submit">Masuk</button>
            
            <div class="register-link">
                <span>Belum mempunyai akun? <a href="{{ route('register')}}">Regist sekarang!</a></span>
            </div>
        </div>
        
        <div class="image-container">
            <img src="{{ asset('images/loginregistpict.png') }}" alt="loginregist" class="loginregist" />
        </div>
    </div>
</body>
</html>