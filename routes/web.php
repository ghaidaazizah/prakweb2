<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\ForminputController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Selamat Siang Pak Rojul";
});

Route::get('/about', function () {
    return view('about',[
        "nama" => "Geda",
        "umur" => 18,
        "email" => "geda@gmail.com"
    ]);
});

Route::get('/nf', function () {
    return view('nf',[
        "nama" => "Sekolah Tinggi Teknologi Terpadu Nurul Fikri",
        "alamat" => "Srengseng Sawah",
        "email" => "nurulfikri@gmail.com"
    ]);
});

Route::get('/pemeriksaan', function () {
    return view('pemeriksaan');
});

Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']);

Route::get('/form', [ForminputController::class, 'index']);
Route::post('/form', [ForminputController::class, 'form']);

// Ini route untuk backend atau admin
// cara grouping route = Route::profix('admin')->group(function)
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/kategori_produk', [KategoriProdukController::class, 'index']); 
    Route::get('/pesanan', [PesananController::class, 'index']); 
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']); 
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']); 
    Route::post('/produk/update/{id}', [ProdukController::class, 'update']); 
    Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']); 
    Route::get('/pesanan/create', [PesananController::class, 'create']);
    Route::post('/pesanan/store', [PesananController::class, 'store']);
    Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']); 
    Route::post('/pesanan/update/{id}', [PesananController::class, 'update']);
    Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']); 
    Route::get('/kategoriproduk/create', [KategoriProdukController::class, 'create']);
    Route::post('/kategoriproduk/store', [KategoriProdukController::class, 'store']);
    Route::get('/kategoriproduk/delete/{id}', [KategoriProdukController::class, 'destroy']); 
});

// ini route untuk frontend atau user
Route::prefix('user')->group(function () {
    Route::get('/dashboard', [FrontendController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
