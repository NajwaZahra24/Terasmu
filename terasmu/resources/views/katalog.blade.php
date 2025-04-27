<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .catalog {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        .product {
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        .product img {
            max-width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }
        .product h2 {
            font-size: 20px;
            margin: 10px 0 5px;
        }
        .product p {
            color: #777;
            font-size: 16px;
        }
        .price {
            color: #4CAF50;
            font-weight: bold;
            margin-top: 10px;
            font-size: 18px;
        }
        .button {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Katalog Produk Kami</h1>
    <div class="catalog">
        <div class="product">
            <img src="https://via.placeholder.com/250x200" alt="Produk 1">
            <h2>Nama Produk 1</h2>
            <p>Deskripsi singkat produk 1.</p>
            <div class="price">Rp150.000</div>
            <a href="#" class="button">Beli Sekarang</a>
        </div>

        <div class="product">
            <img src="https://via.placeholder.com/250x200" alt="Produk 2">
            <h2>Nama Produk 2</h2>
            <p>Deskripsi singkat produk 2.</p>
            <div class="price">Rp200.000</div>
            <a href="#" class="button">Beli Sekarang</a>
        </div>

        <div class="product">
            <img src="https://via.placeholder.com/250x200" alt="Produk 3">
            <h2>Nama Produk 3</h2>
            <p>Deskripsi singkat produk 3.</p>
            <div class="price">Rp180.000</div>
            <a href="#" class="button">Beli Sekarang</a>
        </div>

        <!-- Tambahkan produk lain di sini -->
    </div>

</body>
</html>
