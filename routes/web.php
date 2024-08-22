<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CompartirControler;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NosotrosTextController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QrAuthController;
use App\Http\Controllers\RedesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Compartir
    Route::get('/compartir/{login_token}', [CompartirControler::class, 'show']);

    // Register
    Route::get('register', [RegisteredUserController::class, 'create'])->name('auth.register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    // QR Code
    Route::get('/qr-compartir/{token}', [CompartirControler::class, 'show'])->name('qr.compartir');

    // Redes
    Route::get('redes', [RedesController::class, 'index'])->name('redes.index');
    Route::post('redes', [RedesController::class, 'store'])->name('redes.store');
    Route::delete('redes/{id}', [RedesController::class, 'destroy'])->name('redes.destroy');

    // Nosotros
    Route::get('/nosotros', [NosotrosTextController::class, 'index'])->name('nosotros.index');
    Route::post('/nosotros', [NosotrosTextController::class, 'store'])->name('nosotros.store');
    Route::get('/nosotros/{token}', [CompartirControler::class, 'nosotros'])->name('nosotros.compartir');

    // Admin Usuarios
    Route::get('/admin/usuarios', [AdminUserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/usuarios/search', [AdminUserController::class, 'search'])->name('admin.users.search');
    Route::get('/admin/usuarios/{user}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/usuarios/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');
});

Route::middleware('guest')->group(function () {
    // Compartir
    Route::get('/compartir/{login_token}', [CompartirControler::class, 'show']);

    // QR Code
    Route::get('/qr-compartir/{token}', [CompartirControler::class, 'show'])->name('qr.compartir');

    // Nosotros
    Route::get('/nosotros/{token}', [CompartirControler::class, 'nosotros'])->name('nosotros.compartir');
});

require __DIR__ . '/auth.php';
