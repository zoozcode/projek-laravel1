<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MebelController;

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
    Route::get('/logout', [SesiController::class, 'logout']);
    Route::get('/user/logout', [SesiController::class, 'logout']);
    Route::get('/admin/logout', [SesiController::class, 'logout']);
});





Route::get('/admin/siswa', [admin::class, 'index']);
Route::get('/admin/siswa/form', [admin::class, 'siswaForm'])->name(('siswa.form'));
Route::post('/admin/siswa', [admin::class, 'siswapost'])->name('siswa');
Route::get('/admin/siswaedit/{id}', [admin::class, 'siswaedit']);
Route::post('/admin/siswaupdate', [admin::class, 'siswaupdate']);
Route::get('/admin/siswadelete/{id}', [admin::class, 'siswadelete']);


Route::get('/admin/produk', [ProdukController::class, 'index']);
Route::post('/admin/produk', [ProdukController::class, 'create']);

Route::get('/home', [MebelController::class, 'home']);
Route::get('/produk', [MebelController::class, 'produk']);
