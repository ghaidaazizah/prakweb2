<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\ForminputController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
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
});

// ini route untuk frontend atau user
Route::prefix('user')->group(function () {
    Route::get('/dashboard', [FrontendController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);
});