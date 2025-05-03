<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 20px;
        }

        .product-title {
            font-size: 28px;
            margin-bottom: 10px;
            color: #343a40;
        }

        .product-price {
            font-size: 20px;
            color: #28a745;
            margin-bottom: 15px;
        }

        .product-description {
            font-size: 16px;
            color: #6c757d;
            margin-bottom: 30px;
        }

        .back-button {
            display: inline-block;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 16px;
            border-radius: 4px;
            transition: background-color 0.2s ease;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .image-placeholder {
            width: 100%;
            height: 300px;
            background-color: #dee2e6;
            margin-bottom: 20px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #adb5bd;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-placeholder">
            Gambar Produk (opsional)
        </div>

        <div class="product-title">{{ $produk['nama'] }}</div>
        <div class="product-price">Rp {{ number_format($produk['harga'], 0, ',', '.') }}</div>
        <div class="product-description">{{ $produk['deskripsi'] }}</div>

        <a href="{{ route('katalog') }}" class="back-button">← Kembali ke Katalog</a>
    </div>
</body>
</html>
