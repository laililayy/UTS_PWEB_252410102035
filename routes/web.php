<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Halaman Login
Route::get('/', [PageController::class, 'login']);
Route::get('/login', [PageController::class, 'login']);

// Proses Login
Route::get('/proses-login', [PageController::class, 'prosesLogin']);

// Halaman utama aplikasi
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/profile', [PageController::class, 'profile']);
Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);
