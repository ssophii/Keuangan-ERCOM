<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PemasukkanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');
    Route::post('/anggota/store', [AnggotaController::class, 'store'])->name('anggota.store');
    Route::put('/anggota/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
    Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/pemasukkan', [PemasukkanController::class, 'index'])->name('pemasukkan.index');
    Route::post('/pemasukkan', [PemasukkanController::class, 'store'])->name('pemasukkan.store');
    Route::delete('/pemasukkan/{id}', [PemasukkanController::class, 'destroy'])->name('pemasukkan.destroy');
    Route::put('/pemasukkan/{id}', [PemasukkanController::class, 'update'])->name('pemasukkan.update');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluaran.index');
    Route::post('/pengeluaran', [PengeluaranController::class, 'store'])->name('pengeluaran.store');
    Route::delete('/pengeluaran/{id}', [PengeluaranController::class, 'destroy'])->name('pengeluaran.destroy');
    Route::put('/pengeluaran/{id}', [PengeluaranController::class, 'update'])->name('pengeluaran.update');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/cetak', [DashboardController::class, 'cetakLaporan'])->name('dashboard.cetak');
// Route::get('/cetak-laporan', [LaporanController::class, 'cetak'])->name('cetak.laporan');

Route::post('/password/whatsapp', [PasswordResetLinkController::class, 'sendResetLinkViaWhatsApp'])->name('password.whatsapp');

require __DIR__.'/auth.php';
