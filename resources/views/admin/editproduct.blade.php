<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-header {
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #dee2e6;
        }
        .image-preview {
            max-width: 200px;
            max-height: 200px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h2>Edit Produk</h2>
            </div>
            
            <form action="/products/update/<?= $product['id'] ?>" method="POST" enctype="multipart/form-data">
                <!-- Nama Produk -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="name" name="name" 
                           value="<?= isset($product['name']) ? $product['name'] : '' ?>" required>
                </div>
                
                <!-- Kategori -->
                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <select class="form-select" id="category" name="category" required>
                        <option value="">Pilih Kategori</option>
                        <option value="Elektronik" <?= (isset($product['category']) && $product['category'] == 'Elektronik') ? 'selected' : '' ?>>Elektronik</option>
                        <option value="Pakaian" <?= (isset($product['category']) && $product['category'] == 'Pakaian') ? 'selected' : '' ?>>Pakaian</option>
                        <option value="Makanan" <?= (isset($product['category']) && $product['category'] == 'Makanan') ? 'selected' : '' ?>>Makanan</option>
                        <option value="Perabotan" <?= (isset($product['category']) && $product['category'] == 'Perabotan') ? 'selected' : '' ?>>Perabotan</option>
                        <option value="Lainnya" <?= (isset($product['category']) && $product['category'] == 'Lainnya') ? 'selected' : '' ?>>Lainnya</option>
                    </select>
                </div>
                
                <!-- Harga dan Harga Asli -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="price" name="price" 
                               value="<?= isset($product['price']) ? $product['price'] : '' ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="original_price" class="form-label">Harga Asli</label>
                        <input type="number" class="form-control" id="original_price" name="original_price" 
                               value="<?= isset($product['original_price']) ? $product['original_price'] : '' ?>">
                    </div>
                </div>
                
                <!-- Label -->
                <div class="mb-3">
                    <label for="label" class="form-label">Label</label>
                    <select class="form-select" id="label" name="label">
                        <option value="">Tidak ada label</option>
                        <option value="Terbaru" <?= (isset($product['label']) && $product['label'] == 'Terbaru') ? 'selected' : '' ?>>Terbaru</option>
                        <option value="Populer" <?= (isset($product['label']) && $product['label'] == 'Populer') ? 'selected' : '' ?>>Populer</option>
                        <option value="Diskon" <?= (isset($product['label']) && $product['label'] == 'Diskon') ? 'selected' : '' ?>>Diskon</option>
                        <option value="Best Seller" <?= (isset($product['label']) && $product['label'] == 'Best Seller') ? 'selected' : '' ?>>Best Seller</option>
                    </select>
                </div>
                
                <!-- Rating -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="rating" class="form-label">Rating (0-5)</label>
                        <input type="number" class="form-control" id="rating" name="rating" min="0" max="5" step="0.1"
                               value="<?= isset($product['rating']) ? $product['rating'] : '0' ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="rating_count" class="form-label">Jumlah Rating</label>
                        <input type="number" class="form-control" id="rating_count" name="rating_count" min="0"
                               value="<?= isset($product['rating_count']) ? $product['rating_count'] : '0' ?>">
                    </div>
                </div>
                
                <!-- Gambar Produk -->
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Produk</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    
                    <?php if(isset($product['image_path']) && !empty($product['image_path'])): ?>
                        <div class="mt-2">
                            <p>Gambar saat ini:</p>
                            <img src="<?= $product['image_path'] ?>" alt="Preview Gambar" class="image-preview">
                            <input type="hidden" name="current_image" value="<?= $product['image_path'] ?>">
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Ketersediaan -->
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="is_available" name="is_available" 
                           <?= (isset($product['is_available']) && $product['is_available']) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="is_available">Produk Tersedia</label>
                </div>
                
                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-between">
                    <a href="/products" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Preview gambar sebelum upload
        document.getElementById('image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const previewContainer = document.querySelector('.image-preview-container');
                    if (!previewContainer) {
                        const container = document.createElement('div');
                        container.className = 'mt-2 image-preview-container';
                        container.innerHTML = '<p>Preview Gambar Baru:</p><img src="" class="image-preview">';
                        document.getElementById('image').after(container);
                    }
                    
                    const preview = document.querySelector('.image-preview-container .image-preview');
                    preview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>