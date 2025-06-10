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
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category }}</td>
                                <td>{{ formatRupiah($product->price) }}</td>
                                <td>{{ $product->original_price > 0 ? formatRupiah($product->original_price) : '-' }}</td>
                                <td>
                                    <span class="badge 
                                        @if($product->label === 'Best Seller') bg-success
                                        @elseif($product->label === 'New') bg-primary
                                        @elseif($product->label === 'Sale') bg-danger
                                        @elseif($product->label === 'Limited') bg-warning
                                        @else bg-secondary @endif
                                        label-badge">
                                        {{ $product->label ?: '-' }}
                                    </span>
                                </td>
                                <td class="rating-stars">
                                    @php
                                        $fullStars = floor($product->rating);
                                        $halfStar = $product->rating - $fullStars >= 0.5;
                                        $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                    @endphp
                                    @for($i = 0; $i < $fullStars; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                    @if($halfStar)
                                        <i class="fas fa-star-half-alt"></i>
                                    @endif
                                    @for($i = 0; $i < $emptyStars; $i++)
                                        <i class="far fa-star"></i>
                                    @endfor
                                </td>
                                <td>{{ $product->rating_count }}</td>
                                <td>
                                    @if($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-img-thumbnail">
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    <span class="badge {{ $product->available ? 'bg-success' : 'bg-danger' }} availability-badge">
                                        {{ $product->available ? 'Tersedia' : 'Habis' }}
                                    </span>
                                </td>
                                <td>{{ $product->created_at->format('d/m/Y H:i') }}</td>
                                <td>{{ $product->updated_at->format('d/m/Y H:i') }}</td>
                                <td class="action-buttons">
                                    <button class="btn btn-sm btn-warning" title="Edit Produk" onclick="editProduct({{ $product->id }})">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="Hapus Produk" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mt-3">
                        {{ $products->links() }}
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
                    <form id="productForm" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        <input type="hidden" id="editProductId" name="id" value="" />
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="productName" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="productName" name="name" required />
                                <div class="invalid-feedback">Nama produk harus diisi.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="productCategory" class="form-label">Kategori</label>
                                <select class="form-select" id="productCategory" name="category" required>
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
                                <input type="number" class="form-control" id="productPrice" name="price" min="0" required />
                                <div class="invalid-feedback">Harga harus diisi dan tidak negatif.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="productOriginalPrice" class="form-label">Harga Asli</label>
                                <input type="number" class="form-control" id="productOriginalPrice" name="original_price" min="0" />
                            </div>
                            <div class="col-md-6">
                                <label for="productLabel" class="form-label">Label</label>
                                <select class="form-select" id="productLabel" name="label">
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
                                    name="rating"
                                    min="0"
                                    max="5"
                                    step="0.1"
                                    oninput="checkRatingValue(this)"
                                />
                                <div class="invalid-feedback">Rating harus antara 0 dan 5.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="productRatingCount" class="form-label">Jumlah Rating</label>
                                <input type="number" class="form-control" id="productRatingCount" name="rating_count" min="0" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Ketersediaan</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="productAvailable" name="available" checked />
                                    <label class="form-check-label" for="productAvailable">Tersedia</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="productImage" class="form-label">Gambar Produk</label>
                                <input class="form-control" type="file" id="productImage" name="image" accept="image/*" />
                                <img id="imagePreview" src="#" alt="Preview Gambar" style="display:none" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" form="productForm" class="btn btn-primary" id="saveProductBtn">Simpan Produk</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Format harga ke Rupiah
        function formatRupiah(number) {
            return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(number);
        }

        // Preview gambar saat pilih file
        document.getElementById('productImage').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imagePreview').src = e.target.result;
                    document.getElementById('imagePreview').style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                document.getElementById('imagePreview').style.display = 'none';
                document.getElementById('imagePreview').src = '#';
            }
        });

        // Validasi form dan cek rating
        function checkRatingValue(input) {
            const val = parseFloat(input.value);
            if (val < 0) input.value = 0;
            if (val > 5) input.value = 5;
        }

        // Fungsi untuk mengisi form edit
        function editProduct(id) {
            fetch(`/products/${id}/edit`)
                .then(response => response.json())
                .then(product => {
                    document.getElementById('editProductId').value = product.id;
                    document.getElementById('productName').value = product.name;
                    document.getElementById('productCategory').value = product.category;
                    document.getElementById('productPrice').value = product.price;
                    document.getElementById('productOriginalPrice').value = product.original_price;
                    document.getElementById('productLabel').value = product.label;
                    document.getElementById('productRating').value = product.rating;
                    document.getElementById('productRatingCount').value = product.rating_count;
                    document.getElementById('productAvailable').checked = product.available;
                    
                    // Update form action untuk method PUT
                    const form = document.getElementById('productForm');
                    form.action = `/products/${product.id}`;
                    const methodInput = document.createElement('input');
                    methodInput.type = 'hidden';
                    methodInput.name = '_method';
                    methodInput.value = 'PUT';
                    form.appendChild(methodInput);
                    
                    // Update modal title
                    document.getElementById('addProductModalLabel').textContent = 'Edit Produk';
                    
                    // Show modal
                    new bootstrap.Modal(document.getElementById('addProductModal')).show();
                });
        }

        // Reset form saat modal tambah dibuka
        document.getElementById('addProductBtn').addEventListener('click', function() {
            document.getElementById('productForm').reset();
            document.getElementById('productForm').action = "{{ route('products.store') }}";
            document.getElementById('editProductId').value = '';
            document.getElementById('imagePreview').style.display = 'none';
            document.getElementById('imagePreview').src = '#';
            document.getElementById('addProductModalLabel').textContent = 'Tambah Produk Baru';
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>