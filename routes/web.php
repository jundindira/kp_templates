<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route Halaman Utama untuk User
Route::get('/', [TemplateController::class, 'index'])->name('templates.index');

// Route untuk Login, Register, dll (dari Auth)
Auth::routes();

// Route Dashboard Setelah Login
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');

// Route::get('category', function () {
//     return view('admin.category');
// });

// Route::get('templates', function () {
//     return view('admin.templates');
// });

// Group Route yang Memerlukan Autentikasi
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('category', function () {
        return view('admin.category.index');
    })->name('admin.category.index');

    Route::get('template', function () {
        return view('admin.template.index');
    })->name('admin.template.index');
});
