<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route Halaman Utama untuk User
Route::get('/', [TemplateController::class, 'index'])->name('templates.index');

// Route untuk Login, Register, dll (dari Auth)
Auth::routes();

// Route Dashboard Setelah Login
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', [DashboardController::class, 'index']);

// Route::get('/hello', function () {
//     return 'Hello world';
// });
