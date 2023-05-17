<?php

use Illuminate\Support\Facades\Route;

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