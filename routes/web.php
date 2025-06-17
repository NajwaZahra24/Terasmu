<?php
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FurniturController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (Auth::user()->role == "admin") {
        return redirect()->route("admin.crproduct.index");
    } else {
        return view('dashboard');

    }

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix("admin")->middleware(['role:admin'])->group(function () {
    Route::get('crproduct', [FurniturController::class, 'adminIndex'])->name('admin.crproduct.index');
    Route::post('crproduct', [FurniturController::class, 'store'])->name('admin.crproduct.store');
    Route::get('crproduct/{id}/edit', [FurniturController::class, 'edit'])->name('admin.crproduct.edit');
    Route::put('crproduct/{id}', [FurniturController::class, 'update'])->name('admin.crproduct.update');
    Route::delete('crproduct/{id}', [FurniturController::class, 'destroy'])->name('admin.crproduct.destroy');
});



require __DIR__ . '/auth.php';


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');


// Furnitur Routes
Route::controller(FurniturController::class)->group(function () {
    // Katalog Produk
    Route::get('/katalog', 'index')->name('katalog');
    Route::get('/katalog/search', 'search')->name('katalog.search'); // Route untuk pencarian

    // Detail Produk (dua alternatif route untuk kompatibilitas)
    Route::get('/produk/{id}', 'show')->name('produk.detail');
    Route::get('/detailproduk/{id}', 'show'); // Alternatif route

    // Route alternatif furnitur
    Route::get('/furnitur', 'index');
});

// Static Pages
Route::view('/kontak', 'kontak')->name('kontak');
Route::view('/tentangkami', 'tentangkami')->name('tentangkami');

// Payment Route
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');

// Proses pembelian: kirim data produk ke halaman payment
Route::post('/payment', [PaymentController::class, 'show'])->name('payment.show');


// Riwayat Pembelian (➡️ TANPA middleware auth)
// Route::get('/riwayat', function () {
//     return view('riwayat');
// });

// Halaman Pengiriman
Route::get('/pengiriman', function () {
    return view('pengiriman');
})->name('pengiriman');

//Halaman Pengemblian
Route::get('/pengembalian', function () {
    return view('pengembalian');
})->name('pengembalian');

//Halaman snk
Route::get('/snk', function () {
    return view('snk');
})->name('snk');

//Halaman kebijakanprivasi
Route::get('/kebijakanprivasi', function () {
    return view('kebijakanprivasi');
})->name('kebijakanprivasi');

//Halaman Faq
Route::get('/faq', function () {
    return view('faq');
})->name('faq');


// Halaman profile user
Route::get('/profile', function () {
    return view('profileuser');
})->middleware(['auth'])->name('profileuser');

// Halaman edit profile user
Route::get('/profile/edit', function () {
    return view('edit-profile');
})->middleware('auth')->name('profile.edit');
