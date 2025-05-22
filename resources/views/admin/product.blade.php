<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Furniture - Manajemen Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        .product-img-thumbnail {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 4px;
        }
        .availability-badge {
            font-size: 0.8rem;
            padding: 4px 8px;
        }
        .rating-stars {
            color: #ffc107;
            font-size: 0.9rem;
        }
        .action-buttons .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.8rem;
        }
        .table-responsive {
            overflow-x: auto;
        }
        .label-badge {
            font-size: 0.75rem;
            padding: 3px 6px;
        }
        /* Preview gambar di modal */
        #imagePreview {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 6px;
            border: 1px solid #ddd;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid py-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <h2><i class="fas fa-couch me-2"></i>Manajemen Produk Furniture</h2>
            </div>
            <div class="col-md-6 text-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
                    <i class="fas fa-plus me-1"></i>Tambah Produk
                </button>
            </div>
        </div>

        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h5 class="mb-0">Daftar Produk</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari produk..." id="searchInput" />
                            <button class="btn btn-light" type="button" id="searchBtn">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead class="table-light">
                            <tr>
                                <th width="50">No</th>
                                <th width="80">ID</th>
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Harga Asli</th>
                                <th>Label</th>
                                <th>Rating</th>
                                <th>Jumlah Rating</th>
                                <th>Gambar</th>
                                <th>Tersedia</th>
                                <th>Dibuat</th>
                                <th>Diupdate</th>
                                <th width="120">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mt-3">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Produk -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addProductModalLabel">Tambah Produk Baru</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="productForm" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="productName" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="productName" required />
                                <div class="invalid-feedback">Nama produk harus diisi.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="productCategory" class="form-label">Kategori</label>
                                <select class="form-select" id="productCategory" required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="Sofa">Sofa</option>
                                    <option value="Meja">Meja</option>
                                    <option value="Kursi">Kursi</option>
                                    <option value="Lemari">Lemari</option>
                                    <option value="Tempat Tidur">Tempat Tidur</option>
                                </select>
                                <div class="invalid-feedback">Kategori harus dipilih.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="productPrice" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="productPrice" min="0" required />
                                <div class="invalid-feedback">Harga harus diisi dan tidak negatif.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="productOriginalPrice" class="form-label">Harga Asli</label>
                                <input type="number" class="form-control" id="productOriginalPrice" min="0" />
                            </div>
                            <div class="col-md-6">
                                <label for="productLabel" class="form-label">Label</label>
                                <select class="form-select" id="productLabel">
                                    <option value="">Tidak ada label</option>
                                    <option value="Best Seller">Best Seller</option>
                                    <option value="New">New</option>
                                    <option value="Sale">Sale</option>
                                    <option value="Limited">Limited</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="productRating" class="form-label">Rating</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="productRating"
                                    min="0"
                                    max="5"
                                    step="0.1"
                                    oninput="checkRatingValue(this)"
                                />
                                <div class="invalid-feedback">Rating harus antara 0 dan 5.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="productRatingCount" class="form-label">Jumlah Rating</label>
                                <input type="number" class="form-control" id="productRatingCount" min="0" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Ketersediaan</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="productAvailable" checked />
                                    <label class="form-check-label" for="productAvailable">Tersedia</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="productImage" class="form-label">Gambar Produk</label>
                                <input class="form-control" type="file" id="productImage" accept="image/*" />
                                <img id="imagePreview" src="#" alt="Preview Gambar" style="display:none" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="saveProductBtn">Simpan Produk</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Preview gambar produk saat upload
        document.getElementById('productImage').addEventListener('change', function (e) {
            const preview = document.getElementById('imagePreview');
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    preview.src = event.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                preview.src = '#';
                preview.style.display = 'none';
            }
        });

        // Validasi rating input supaya antara 0-5
        function checkRatingValue(input) {
            if (input.value === '') return;
            let val = parseFloat(input.value);
            if (val > 5) input.value = 5;
            if (val < 0) input.value = 0;
        }

        // Event tombol simpan produk
        document.getElementById('saveProductBtn').addEventListener('click', function () {
            const form = document.getElementById('productForm');
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }

            // Ambil data produk dari form
            const newProduct = {
                id: 'F' + (Math.floor(Math.random() * 900) + 100), // ID random (contoh)
                name: document.getElementById('productName').value,
                category: document.getElementById('productCategory').value,
                price: parseFloat(document.getElementById('productPrice').value),
                originalPrice: parseFloat(document.getElementById('productOriginalPrice').value) || null,
                label: document.getElementById('productLabel').value,
                rating: parseFloat(document.getElementById('productRating').value) || 0,
                ratingCount: parseInt(document.getElementById('productRatingCount').value) || 0,
                available: document.getElementById('productAvailable').checked,
                createdDate: new Date().toLocaleDateString('id-ID'),
                updatedDate: new Date().toLocaleDateString('id-ID'),
                imageSrc: document.getElementById('imagePreview').src !== '#' ? document.getElementById('imagePreview').src : 'https://via.placeholder.com/80',
            };

            // Tambah produk ke tabel (sederhana tanpa backend)
            addProductToTable(newProduct);

            // Reset form dan close modal
            form.reset();
            form.classList.remove('was-validated');
            document.getElementById('imagePreview').style.display = 'none';
            const modalEl = document.getElementById('addProductModal');
            const modal = bootstrap.Modal.getInstance(modalEl);
            modal.hide();
        });

        // Fungsi menambahkan produk ke tabel
        function addProductToTable(product) {
            const tbody = document.querySelector('table tbody');
            const no = tbody.rows.length + 1;

            // Buat badge label
            let labelBadge = '';
            if (product.label) {
                let badgeClass = 'bg-secondary';
                switch (product.label.toLowerCase()) {
                    case 'best seller':
                        badgeClass = 'bg-success';
                        break;
                    case 'new':
                        badgeClass = 'bg-info';
                        break;
                    case 'sale':
                        badgeClass = 'bg-danger';
                        break;
                    case 'limited':
                        badgeClass = 'bg-warning text-dark';
                        break;
                }
                labelBadge = `<span class="badge ${badgeClass} label-badge">${product.label}</span>`;
            }

            // Buat badge availability
            const availabilityBadge = product.available
                ? '<span class="badge bg-success availability-badge">Tersedia</span>'
                : '<span class="badge bg-secondary availability-badge">Habis</span>';

            // Buat rating stars
            const fullStars = Math.floor(product.rating);
            const halfStar = product.rating - fullStars >= 0.5;
            let starsHtml = '';
            for (let i = 0; i < fullStars; i++) {
                starsHtml += '<i class="fas fa-star"></i>';
            }
            if (halfStar) {
                starsHtml += '<i class="fas fa-star-half-alt"></i>';
            }
            const emptyStars = 5 - fullStars - (halfStar ? 1 : 0);
            for (let i = 0; i < emptyStars; i++) {
                starsHtml += '<i class="far fa-star"></i>';
            }

            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${no}</td>
                <td>${product.id}</td>
                <td>${product.name}</td>
                <td>${product.category}</td>
                <td>Rp ${product.price.toLocaleString('id-ID')}</td>
                <td>${product.originalPrice ? 'Rp ' + product.originalPrice.toLocaleString('id-ID') : '-'}</td>
                <td>${labelBadge}</td>
                <td><span class="rating-stars">${starsHtml} <span class="ms-1">${product.rating.toFixed(1)}</span></span></td>
                <td>${product.ratingCount}</td>
                <td><img src="${product.imageSrc}" alt="Product Image" class="product-img-thumbnail" /></td>
                <td>${availabilityBadge}</td>
                <td>${product.createdDate}</td>
                <td>${product.updatedDate}</td>
                <td class="action-buttons">
                    <button class="btn btn-sm btn-warning" title="Edit">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="btn btn-sm btn-danger" title="Hapus" onclick="this.closest('tr').remove(); updateRowNumbers();">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            `;
            tbody.appendChild(tr);
        }

        // Update nomor urut setelah penghapusan
        function updateRowNumbers() {
            const rows = document.querySelectorAll('table tbody tr');
            rows.forEach((row, index) => {
                row.cells[0].textContent = index + 1;
            });
        }

        // Search filter
        function filterTable() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const rows = document.querySelectorAll('table tbody tr');
            rows.forEach(row => {
                const productName = row.cells[2].textContent.toLowerCase();
                if (productName.includes(input)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        document.getElementById('searchInput').addEventListener('keyup', filterTable);
        document.getElementById('searchBtn').addEventListener('click', filterTable);

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
