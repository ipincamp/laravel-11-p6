<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::controller(App\Http\Controllers\MahasiswaController::class)->group(function () {
    Route::get('/data-mahasiswa', 'index')->name('data-mahasiswa');
    Route::post('/data-mahasiswa', 'store')->name('data-mahasiswa');
});
Route::controller(App\Http\Controllers\JadwalMataKuliahController::class)->group(function () {
    Route::get('/jadwal-kuliah', 'index')->name('jadwal-kuliah');
    Route::post('/jadwal-kuliah', 'store')->name('jadwal-kuliah');
});
