<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Home2Controller;
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Password;

Route::get('/', [HomeController::class, 'index']);

// Form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// 1. Tampilkan form lupa password
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->name('password.request');

// 2. Kirim email berisi reset password link
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])
    ->name('password.email');

// 3. Tampilkan form reset password (dari link email)
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
    ->name('password.reset');

// 4. Simpan password baru
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])
    ->name('password.update');

// Form registrasi
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Home2Controller untuk halaman home2
Route::get('/home2', [Home2Controller::class, 'index'])->name('home2');

// ArtikelController untuk halaman artikel
Route::get('/artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');

Route::post('/artikel', [ArtikelController::class, 'store'])->name('artikel.store');

Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');

//untuk menampilkan artikel ketika di klik
Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');







