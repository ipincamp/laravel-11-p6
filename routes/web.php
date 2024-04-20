<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/data-mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('data-mahasiswa');
    Route::post('/data-mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'store'])->name('data-mahasiswa');
    Route::get('/jadwal-kuliah', [App\Http\Controllers\JadwalMataKuliahController::class, 'index'])->name('jadwal-kuliah');
    Route::post('/jadwal-kuliah', [App\Http\Controllers\JadwalMataKuliahController::class, 'store'])->name('jadwal-kuliah');
});
/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/data-mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('data-mahasiswa')->middleware('auth');
Route::post('/data-mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'store'])->name('data-mahasiswa')->middleware('auth');
Route::get('/jadwal-kuliah', [App\Http\Controllers\JadwalMataKuliahController::class, 'index'])->name('jadwal-kuliah')->middleware('auth');
Route::post('/jadwal-kuliah', [App\Http\Controllers\JadwalMataKuliahController::class, 'store'])->name('jadwal-kuliah')->middleware('auth');
*/
