<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/data-mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('data-mahasiswa');
Route::post('/data-mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'store'])->name('data-mahasiswa');
