<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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

        .signup-container {
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
            background-color: #3c3c3c;
            display: none;
            position: relative;
        }

        .image-frame {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            height: 80%;
            background-image: url('/api/placeholder/600/800');
            background-size: cover;
            background-position: center;
            border-radius: 20px;
            overflow: hidden;
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

        .name-row {
            display: flex;
            gap: 20px;
        }

        .name-row .form-control {
            flex: 1;
        }

        .info-text {
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
            line-height: 1.5;
        }

        .btn-signup {
            width: 100%;
            padding: 15px;
            background-color: #b08d5d;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
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
    <div class="signup-container">
        <div class="form-section">
            <a href="#" class="back-arrow">←</a>
            
            <h1 class="title">Sign Up</h1>
            <h2 class="subtitle">Bikin akun baru</h2>
            <p class="description">Silahkan masukkan data anda yang sesuai yaa!</p>
            
            <form>
                <div class="form-group">
                    <label for="fullname">Nama Lengkap</label>
                    <div class="name-row">
                        <input type="text" id="firstname" class="form-control" placeholder="Nama depan">
                        <input type="text" id="lastname" class="form-control" placeholder="Nama akhir">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="emailanda@gmail.com">
                </div>
                
                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" class="form-control" placeholder="Masukkan kata sandi anda">
                </div>
                
                <p class="info-text">
                    Dengan mendaftar, anda akan lebih mudah melakukan pembelian di Terasmu. Terimakasih karena sudah mendaftar!
                </p>
                
                <button type="submit" class="btn-signup">Mendaftar</button>
            </form>
        </div>
        
        <div class="image-section">
            <div class="image-frame"></div>
        </div>
    </div>
</body>
</html>