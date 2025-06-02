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
            margin-right: 2px;
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
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal" id="addProductBtn">
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
                    <table class="table table-hover table-striped" id="productTable">
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
                            <!-- Produk akan dimasukkan di sini -->
                        </tbody>
                    </table>
                </div>

                <!-- Pagination (dummy, tanpa fungsi paging sebenarnya) -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mt-3" id="pagination">
                        <li class="page-item disabled" id="prevPage">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item" id="nextPage">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Modal Tambah/Edit Produk -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addProductModalLabel">Tambah Produk Baru</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="productForm" novalidate>
                        <input type="hidden" id="editProductId" value="" />
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
        const products = [];
        let currentId = 1;

        const productTableBody = document.querySelector('#productTable tbody');
        const productForm = document.getElementById('productForm');
        const addProductModal = new bootstrap.Modal(document.getElementById('addProductModal'));
        const addProductBtn = document.getElementById('addProductBtn');
        const saveProductBtn = document.getElementById('saveProductBtn');
        const imageInput = document.getElementById('productImage');
        const imagePreview = document.getElementById('imagePreview');
        const searchInput = document.getElementById('searchInput');
        const searchBtn = document.getElementById('searchBtn');
        const editProductIdInput = document.getElementById('editProductId');
        const addProductModalLabel = document.getElementById('addProductModalLabel');

        // Preview gambar saat pilih file
        imageInput.addEventListener('change', () => {
            const file = imageInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = e => {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                imagePreview.style.display = 'none';
                imagePreview.src = '#';
            }
        });

        // Reset form modal
        function resetForm() {
            productForm.classList.remove('was-validated');
            productForm.reset();
            imagePreview.style.display = 'none';
            imagePreview.src = '#';
            editProductIdInput.value = '';
            addProductModalLabel.textContent = 'Tambah Produk Baru';
        }

        // Format harga ke Rupiah
        function formatRupiah(number) {
            return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(number);
        }

        // Render tabel produk
        function renderTable(filter = '') {
            productTableBody.innerHTML = '';
            let filtered = products;
            if (filter.trim() !== '') {
                const keyword = filter.toLowerCase();
                filtered = products.filter(p => 
                    p.name.toLowerCase().includes(keyword) ||
                    p.category.toLowerCase().includes(keyword) ||
                    p.label.toLowerCase().includes(keyword)
                );
            }
            if (filtered.length === 0) {
                productTableBody.innerHTML = '<tr><td colspan="14" class="text-center">Tidak ada produk ditemukan.</td></tr>';
                return;
            }
            filtered.forEach((product, index) => {
                const tr = document.createElement('tr');

                // No
                const tdNo = document.createElement('td');
                tdNo.textContent = index + 1;
                tr.appendChild(tdNo);

                // ID
                const tdId = document.createElement('td');
                tdId.textContent = product.id;
                tr.appendChild(tdId);

                // Nama Produk
                const tdName = document.createElement('td');
                tdName.textContent = product.name;
                tr.appendChild(tdName);

                // Kategori
                const tdCategory = document.createElement('td');
                tdCategory.textContent = product.category;
                tr.appendChild(tdCategory);

                // Harga
                const tdPrice = document.createElement('td');
                tdPrice.textContent = formatRupiah(product.price);
                tr.appendChild(tdPrice);

                // Harga Asli
                const tdOriginalPrice = document.createElement('td');
                tdOriginalPrice.textContent = product.originalPrice > 0 ? formatRupiah(product.originalPrice) : '-';
                tr.appendChild(tdOriginalPrice);

                // Label dengan badge
                const tdLabel = document.createElement('td');
                const labelSpan = document.createElement('span');
                labelSpan.textContent = product.label || '-';
                labelSpan.classList.add('badge', 'bg-secondary', 'label-badge');
                // Warna badge sesuai label
                if (product.label.toLowerCase() === 'best seller') labelSpan.classList.replace('bg-secondary', 'bg-success');
                else if (product.label.toLowerCase() === 'new') labelSpan.classList.replace('bg-secondary', 'bg-primary');
                else if (product.label.toLowerCase() === 'sale') labelSpan.classList.replace('bg-secondary', 'bg-danger');
                else if (product.label.toLowerCase() === 'limited') labelSpan.classList.replace('bg-secondary', 'bg-warning');
                tdLabel.appendChild(labelSpan);
                tr.appendChild(tdLabel);

                // Rating dengan bintang
                const tdRating = document.createElement('td');
                tdRating.classList.add('rating-stars');
                const fullStars = Math.floor(product.rating);
                const halfStar = product.rating - fullStars >= 0.5;
                let starsHtml = '';
                for (let i = 0; i < fullStars; i++) starsHtml += '<i class="fas fa-star"></i>';
                if (halfStar) starsHtml += '<i class="fas fa-star-half-alt"></i>';
                const emptyStars = 5 - fullStars - (halfStar ? 1 : 0);
                for (let i = 0; i < emptyStars; i++) starsHtml += '<i class="far fa-star"></i>';
                tdRating.innerHTML = starsHtml;
                tr.appendChild(tdRating);

                // Jumlah Rating
                const tdRatingCount = document.createElement('td');
                tdRatingCount.textContent = product.ratingCount;
                tr.appendChild(tdRatingCount);

                // Gambar (thumbnail)
                const tdImage = document.createElement('td');
                if (product.image) {
                    const img = document.createElement('img');
                    img.src = product.image;
                    img.alt = product.name;
                    img.classList.add('product-img-thumbnail');
                    tdImage.appendChild(img);
                } else {
                    tdImage.textContent = '-';
                }
                tr.appendChild(tdImage);

                // Ketersediaan
                const tdAvailable = document.createElement('td');
                const badgeAvailable = document.createElement('span');
                badgeAvailable.textContent = product.available ? 'Tersedia' : 'Habis';
                badgeAvailable.classList.add('badge', product.available ? 'bg-success' : 'bg-danger', 'availability-badge');
                tdAvailable.appendChild(badgeAvailable);
                tr.appendChild(tdAvailable);

                // Dibuat (tanggal)
                const tdCreated = document.createElement('td');
                tdCreated.textContent = product.createdAt.toLocaleString();
                tr.appendChild(tdCreated);

                // Diupdate (tanggal)
                const tdUpdated = document.createElement('td');
                tdUpdated.textContent = product.updatedAt.toLocaleString();
                tr.appendChild(tdUpdated);

                // Aksi (Edit & Hapus)
                const tdActions = document.createElement('td');
                tdActions.classList.add('action-buttons');

                const editBtn = document.createElement('button');
                editBtn.classList.add('btn', 'btn-sm', 'btn-warning');
                editBtn.title = 'Edit Produk';
                editBtn.innerHTML = '<i class="fas fa-edit"></i>';
                editBtn.addEventListener('click', () => editProduct(product.id));
                tdActions.appendChild(editBtn);

                const deleteBtn = document.createElement('button');
                deleteBtn.classList.add('btn', 'btn-sm', 'btn-danger');
                deleteBtn.title = 'Hapus Produk';
                deleteBtn.innerHTML = '<i class="fas fa-trash-alt"></i>';
                deleteBtn.addEventListener('click', () => deleteProduct(product.id));
                tdActions.appendChild(deleteBtn);

                tr.appendChild(tdActions);

                productTableBody.appendChild(tr);
            });
        }

        // Validasi form dan cek rating
        function checkRatingValue(input) {
            const val = parseFloat(input.value);
            if (val < 0) input.value = 0;
            if (val > 5) input.value = 5;
        }

        // Simpan produk baru atau update produk lama
        saveProductBtn.addEventListener('click', () => {
            productForm.classList.add('was-validated');
            if (!productForm.checkValidity()) {
                return;
            }

            const idEdit = editProductIdInput.value;
            const name = document.getElementById('productName').value.trim();
            const category = document.getElementById('productCategory').value;
            const price = Number(document.getElementById('productPrice').value);
            const originalPrice = Number(document.getElementById('productOriginalPrice').value) || 0;
            const label = document.getElementById('productLabel').value;
            const rating = Number(document.getElementById('productRating').value) || 0;
            const ratingCount = Number(document.getElementById('productRatingCount').value) || 0;
            const available = document.getElementById('productAvailable').checked;

            // Handle gambar (convert ke base64 jika ada file baru)
            if (imageInput.files.length > 0) {
                const file = imageInput.files[0];
                const reader = new FileReader();
                reader.onload = e => {
                    const imageBase64 = e.target.result;
                    saveProduct(idEdit, name, category, price, originalPrice, label, rating, ratingCount, available, imageBase64);
                };
                reader.readAsDataURL(file);
            } else {
                // Jika edit dan tidak ganti gambar
                let existingImage = '';
                if (idEdit) {
                    const prod = products.find(p => p.id === Number(idEdit));
                    existingImage = prod ? prod.image : '';
                }
                saveProduct(idEdit, name, category, price, originalPrice, label, rating, ratingCount, available, existingImage);
            }
        });

        function saveProduct(idEdit, name, category, price, originalPrice, label, rating, ratingCount, available, imageBase64) {
            if (idEdit) {
                // Update produk
                const index = products.findIndex(p => p.id === Number(idEdit));
                if (index !== -1) {
                    products[index].name = name;
                    products[index].category = category;
                    products[index].price = price;
                    products[index].originalPrice = originalPrice;
                    products[index].label = label;
                    products[index].rating = rating;
                    products[index].ratingCount = ratingCount;
                    products[index].available = available;
                    products[index].image = imageBase64;
                    products[index].updatedAt = new Date();
                }
            } else {
                // Tambah produk baru
                const newProduct = {
                    id: currentId++,
                    name,
                    category,
                    price,
                    originalPrice,
                    label,
                    rating,
                    ratingCount,
                    available,
                    image: imageBase64,
                    createdAt: new Date(),
                    updatedAt: new Date(),
                };
                products.push(newProduct);
            }
            renderTable(searchInput.value);
            addProductModal.hide();
            resetForm();
        }

        // Edit produk - isi form modal dengan data produk
        function editProduct(id) {
            const product = products.find(p => p.id === id);
            if (!product) return;
            editProductIdInput.value = product.id;
            document.getElementById('productName').value = product.name;
            document.getElementById('productCategory').value = product.category;
            document.getElementById('productPrice').value = product.price;
            document.getElementById('productOriginalPrice').value = product.originalPrice;
            document.getElementById('productLabel').value = product.label;
            document.getElementById('productRating').value = product.rating;
            document.getElementById('productRatingCount').value = product.ratingCount;
            document.getElementById('productAvailable').checked = product.available;
            if (product.image) {
                imagePreview.src = product.image;
                imagePreview.style.display = 'block';
            } else {
                imagePreview.style.display = 'none';
                imagePreview.src = '#';
            }
            addProductModalLabel.textContent = 'Edit Produk';
            addProductModal.show();
        }

        // Hapus produk dengan konfirmasi
        function deleteProduct(id) {
            if (confirm('Apakah Anda yakin ingin menghapus produk ini?')) {
                const index = products.findIndex(p => p.id === id);
                if (index !== -1) {
                    products.splice(index, 1);
                    renderTable(searchInput.value);
                }
            }
        }

        // Event tombol cari
        searchBtn.addEventListener('click', () => {
            renderTable(searchInput.value);
        });

        // Search on Enter key
        searchInput.addEventListener('keyup', e => {
            if (e.key === 'Enter') {
                renderTable(searchInput.value);
            }
        });

        // Saat tombol Tambah Produk ditekan, reset form
        addProductBtn.addEventListener('click', () => {
            resetForm();
        });

        // Inisialisasi tabel kosong
        renderTable();

        // OPTIONAL: Fungsi pagination dummy - hanya mengaktifkan/mematikan tombol prev/next
        /*
        const prevPageBtn = document.getElementById('prevPage');
        const nextPageBtn = document.getElementById('nextPage');
        // Implementasi pagination bisa ditambah sesuai kebutuhan
        */
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
