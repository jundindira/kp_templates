<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminTemplateController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route Halaman Utama untuk User
Route::get('/', [TemplateController::class, 'index'])->name('template.index');

// Route untuk Login, Register, dll (dari Auth)
Auth::routes();

// Group Route yang Memerlukan Autentikasi
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::prefix('category')->middleware('auth')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/update/{category}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });

    Route::prefix('templates')->name('templates.')->group(function () {
        Route::get('/', [AdminTemplateController::class, 'index'])->name('index'); // Menampilkan daftar template
        Route::get('/create', [AdminTemplateController::class, 'create'])->name('create'); // Form untuk tambah template
        Route::post('/', [AdminTemplateController::class, 'store'])->name('store'); // Simpan template baru
        Route::get('/edit/{id}', [AdminTemplateController::class, 'edit'])->name('edit'); // Form untuk edit template
        Route::put('/update/{id}', [AdminTemplateController::class, 'update'])->name('update'); // Update template
        Route::delete('/{id}', [AdminTemplateController::class, 'destroy'])->name('destroy'); // Hapus template
    });
});
