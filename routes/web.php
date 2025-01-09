<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controllers\UserController::class, 'index'])->name('home');

Route::get('/dashboard', [Controllers\UserController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/chatbot', [Controllers\ChatbotController::class, 'index'])->name('chatbot.index');
    Route::post('/chatbot', [Controllers\ChatbotController::class, 'sendMessage'])->name('chatbot.sendMessage');
});

Route::prefix('user')->group(function () {
    Route::get('/anak', [Controllers\UserController::class, 'viewAnak'])->name('user.anak');
    Route::get('/anak/{id}/layanan', [Controllers\UserController::class, 'viewLayananAnak'])->name('user.layanan.anak');
    Route::get('/anak/{id}/imun', [Controllers\UserController::class, 'viewImunisasiAnak'])->name('user.imun.anak');
    Route::get('/hamil', [Controllers\UserController::class, 'viewHamil'])->name('user.hamil');
    Route::get('/jenis-imun', [Controllers\UserController::class, 'viewJenisImun'])->name('user.jenis-imun');
    Route::get('/jadwal', [Controllers\UserController::class, 'viewJadwal'])->name('user.jadwal');
    Route::get('/layanan-anak/export', [Controllers\LayananAnakController::class, 'export'])->name('export');
});

require __DIR__ . '/auth.php';
