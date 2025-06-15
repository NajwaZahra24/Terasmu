<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Saya</title>
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
            margin: 0;
            padding: 0;
            background-color: var(--secondary);
            color: var(--text-color);
        }
        
        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 30px;
            background: var(--white);
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        }
        
        h1 {
            color: var(--primary);
            border-bottom: 2px solid var(--light-gray);
            padding-bottom: 15px;
            margin-bottom: 25px;
        }
        
        .profile-info {
            margin-top: 20px;
        }
        
        .info-row {
            display: flex;
            margin-bottom: 15px;
            padding: 12px 15px;
            background: var(--secondary);
            border-radius: 6px;
            align-items: center;
        }
        
        .info-label {
            font-weight: bold;
            width: 150px;
            color: var(--primary);
        }
        
        .info-value {
            flex: 1;
            color: var(--accent);
        }
        
        .btn-group {
            display: flex;
            gap: 10px;
            margin-top: 30px;
        }
        
        .btn {
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
        }
        
        .btn-primary:hover {
            background-color: #8c6540;
        }
        
        .btn-secondary {
            background-color: var(--light-gray);
            color: var(--accent);
        }
        
        .btn-secondary:hover {
            background-color: #c9c9c9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Akun Saya</h1>
        
        <div class="profile-info">
            <div class="info-row">
                <div class="info-label">Nama Lengkap</div>
                <div class="info-value" id="fullname">John Doe</div>
            </div>
            
            <div class="info-row">
                <div class="info-label">Alamat Email</div>
                <div class="info-value" id="email">john.doe@example.com</div>
            </div>
        </div>
        
        <div class="btn-group">
            <button class="btn btn-secondary" onclick="goBack()">Kembali</button>
            <button class="btn btn-primary" onclick="editProfile()">Edit Profil</button>
        </div>
    </div>

    <script>
        // Data pengguna (biasanya ini akan diambil dari database/API)
        const userData = {
            fullname: "John Doe",
            email: "john.doe@example.com"
        };

        // Fungsi untuk mengisi data pengguna
        function loadUserData() {
            document.getElementById('fullname').textContent = userData.fullname;
            document.getElementById('email').textContent = userData.email;
        }

        // Fungsi untuk edit profil (contoh sederhana)
        function editProfile() {
            const newName = prompt("Masukkan nama baru:", userData.fullname);
            if (newName) {
                userData.fullname = newName;
            }
            
            const newEmail = prompt("Masukkan email baru:", userData.email);
            if (newEmail) {
                userData.email = newEmail;
            }
            
            loadUserData();
        }

        // Fungsi untuk tombol kembali
        function goBack() {
            window.history.back();
        }

        // Memuat data saat halaman dimuat
        window.onload = loadUserData;
    </script>
</body>
</html>