<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Register</title>
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
        }

        label {
            display: block;
            font-weight: 500;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            background-color: #f9f9f9;
            font-size: 16px;
        }

        button[type="submit"] {
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

        button[type="submit"]:hover {
            background-color: #a07958;
        }

        .login-link {
            text-align: center;
        }

        .login-link a {
            color: #b08968;
            text-decoration: none;
            font-weight: 500;
        }

        .nightstand {
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
            <button class="back-button" onclick="history.back()">
                ←
            </button>

            <h1>Register</h1>

            <h2>Bikin akun baru</h2>
            <p>Silakan masukkan data Anda yang sesuai yaa!</p>

            <form action="/register" method="POST">
                <div class="input-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Nama lengkap anda" required autocomplete="name" />
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="emailanda@gmail.com" required autocomplete="email" />
                </div>

                <div class="input-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan kata sandi anda" required autocomplete="new-password" />
                </div>

                <button type="submit">Mendaftar</button>
            </form>

            <div class="login-link">
                <span>Sudah punya akun? <a href="{{ route('login') }}">Login</a>
</span>
            </div>
        </div>

        <div class="image-container">
            <img src="https://images.unsplash.com/photo-1617104522578-cdb006395265?ixlib=rb-4.0.3&auto=format&fit=crop&w=987&q=80" alt="Wooden nightstand with lamp" class="nightstand" />
        </div>
    </div>
</body>
</html>
