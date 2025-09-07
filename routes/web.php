<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Selamat Datang di Laravel!";
});

Route::get('/profil', function(){
    return "Ini adalah halaman profil";
});

Route::get('/home', [App\http\Controllers\HomeController::class, 'index']);

Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index']);

Route::get('/buku', [App\Http\Controllers\BukuController::class, 'index']);

Route::get('/makanan', [App\Http\Controllers\MakananController::class, 'index']);

Route::get('/anime', [App\Http\Controllers\AnimeController::class, 'index']);