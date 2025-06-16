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
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        a {
            text-decoration: none;
        }

        .form-container {
            width: 100%;
            max-width: 500px;
            padding: 40px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin: 20px;
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
            margin-bottom: 8px;
            color: #333;
        }

        .input-hint {
            font-size: 14px;
            color: #666;
            margin-bottom: 8px;
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
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #9a7556;
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

        .error {
            color: #ff3333;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <a href="{{ route('home') }}" class="back-button">
            ←
        </a>
        <h1>Login</h1>

        <h2>Masuk ke akun kamu</h2>
        <p>Silahkan isi form sesuai dengan data diri anda</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="emailanda@gmail.com" required
                    autocomplete="email" />
            </div>
            
            <div class="input-group">
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" placeholder="Masukkan kata sandi anda" required
                    autocomplete="new-password" />
            </div>
            
            <div class="checkbox-container">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember" class="checkbox-label">Ingat saya</label>
            </div>
            
            <button type="submit">Masuk</button>
        </form>

        @if($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif

        <div class="register-link">
            <span>Belum punya akun? </span>
            <a href="{{ route('register') }}">Daftar</a>
        </div>
    </div>
</body>

</html>