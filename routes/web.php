<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MebelController;
use App\Http\Controllers\StockController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware((['guest']))->group(function () {
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/admin');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin');
    
    //kategori
Route::get('/admin/kategori', [KategoriController::class, 'index']);
Route::get('/admin/kategoritambah', [KategoriController::class, 'kategoritambah'])->name(('kategoritambah'));
Route::post('/admin/kategori', [KategoriController::class, 'kategoripost'])->name('kategori');
Route::get('/admin/kategoriedit/{id}', [KategoriController::class, 'kategoriedit']);
Route::post('/admin/kategoriupdate', [KategoriController::class, 'kategoriupdate']);
Route::get('/admin/kategoridelete/{id}', [KategoriController::class, 'kategoridelete']);

//produk
Route::get('/admin/produk', [ProdukController::class, 'index']);
Route::get('/admin/produktambah', [ProdukController::class, 'produktambah'])->name(('produktambah'));
Route::post('/admin/produk', [ProdukController::class, 'produkpost'])->name('produk');
Route::get('/admin/produkedit/{id}', [ProdukController::class, 'produkedit']);
Route::post('/admin/produkupdate', [ProdukController::class, 'produkupdate']);
Route::get('/admin/produkdelete/{id}', [ProdukController::class, 'produkdelete']);

//stock
Route::get('/admin/stock', [StockController::class, 'index']);
Route::get('/admin/stocktambah', [StockController::class, 'stocktambah'])->name(('stocktambah'));
Route::post('/admin/stock', [StockController::class, 'stockpost'])->name('stock');
Route::get('/admin/stockedit/{id}', [StockController::class, 'stockedit']);
Route::post('/admin/stockupdate', [StockController::class, 'stockupdate']);
Route::get('/admin/stockdelete/{id}', [StockController::class, 'stockdelete']);
    Route::get('/logout', [SesiController::class, 'logout']);
    Route::get('/user/logout', [SesiController::class, 'logout']);
    Route::get('/admin/logout', [SesiController::class, 'logout']);
});




//kategori
// Route::get('/admin/kategori', [KategoriController::class, 'index']);
// Route::get('/admin/kategoritambah', [KategoriController::class, 'kategoritambah'])->name(('kategoritambah'));
// Route::post('/admin/kategori', [KategoriController::class, 'kategoripost'])->name('kategori');
// Route::get('/admin/kategoriedit/{id}', [KategoriController::class, 'kategoriedit']);
// Route::post('/admin/kategoriupdate', [KategoriController::class, 'kategoriupdate']);
// Route::get('/admin/kategoridelete/{id}', [KategoriController::class, 'kategoridelete']);

//produk
// Route::get('/admin/produk', [ProdukController::class, 'index']);
// Route::get('/admin/produktambah', [ProdukController::class, 'produktambah'])->name(('produktambah'));
// Route::post('/admin/produk', [ProdukController::class, 'produkpost'])->name('produk');
// Route::get('/admin/produkedit/{id}', [ProdukController::class, 'produkedit']);
// Route::post('/admin/produkupdate', [ProdukController::class, 'produkupdate']);
// Route::get('/admin/produkdelete/{id}', [ProdukController::class, 'produkdelete']);

//stock
// Route::get('/admin/stock', [StockController::class, 'index']);
// Route::get('/admin/stocktambah', [StockController::class, 'stocktambah'])->name(('stocktambah'));
// Route::post('/admin/stock', [StockController::class, 'stockpost'])->name('stock');
// Route::get('/admin/stockedit/{id}', [StockController::class, 'stockedit']);
// Route::post('/admin/stockupdate', [StockController::class, 'stockupdate']);
// Route::get('/admin/stockdelete/{id}', [StockController::class, 'stockdelete']);


// Route::get('/admin/produk', [ProdukController::class, 'index']);
// Route::post('/admin/produk', [ProdukController::class, 'create']);

Route::get('/home', [MebelController::class, 'home']);
Route::get('/produk', [MebelController::class, 'produk']);
Route::get('/pesanbayar', [MebelController::class, 'pesanbayar']);
Route::get('/contact', [MebelController::class, 'contact']);
Route::get('/faq', [MebelController::class, 'faq']);
Route::get('/profile', [MebelController::class, 'profile']);
