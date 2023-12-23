<?php

use App\Http\Controllers\LayananAnakController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('home');

Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('user')->group(function () {
    Route::get('/anak', [UserController::class, 'viewAnak'])->name('user.anak');
    Route::get('/anak/{id}/layanan', [UserController::class, 'viewLayananAnak'])->name('user.layanan.anak');
    Route::get('/anak/{id}/imun', [UserController::class, 'viewImunisasiAnak'])->name('user.imun.anak');
    Route::get('/hamil', [UserController::class, 'viewHamil'])->name('user.hamil');
    Route::get('/jenis-imun', [UserController::class, 'viewJenisImun'])->name('user.jenis-imun');
    Route::get('/jadwal', [UserController::class, 'viewJadwal'])->name('user.jadwal');
    Route::get('/layanan-anak/export', [LayananAnakController::class, 'export'])->name('export');
});

require __DIR__ . '/auth.php';
