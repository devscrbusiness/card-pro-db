<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CompartirControler;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\NosotrosTextController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QrAuthController;
use App\Http\Controllers\RedesController;
use App\Http\Controllers\ServicioUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthenticatedSessionController::class, 'create'])
    ->name('login');


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Compartir
    Route::get('/compartir/{login_token}', [CompartirControler::class, 'show'])->name('compartir.show');

    // Register
    Route::get('register', [RegisteredUserController::class, 'create'])->name('auth.register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    // QR Code
    Route::get('/qr-compartir/{token}', [CompartirControler::class, 'show'])->name('qr.compartir');

    // Redes
    Route::get('redes', [RedesController::class, 'index'])->name('redes.index');
    Route::post('redes', [RedesController::class, 'store'])->name('redes.store');
    Route::delete('redes/{id}', [RedesController::class, 'destroy'])->name('redes.destroy');
    Route::get('/redes/{token}', [CompartirControler::class, 'redes'])->name('redes.compartir');

    // Nosotros
    Route::get('/nosotros', [NosotrosTextController::class, 'index'])->name('nosotros.index');
    Route::post('/nosotros', [NosotrosTextController::class, 'store'])->name('nosotros.store');
    Route::get('/nosotros/{token}', [CompartirControler::class, 'nosotros'])->name('nosotros.compartir');

    // Admin Usuarios
    Route::get('/admin/usuarios', [AdminUserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/usuarios/search', [AdminUserController::class, 'search'])->name('admin.users.search');
    Route::get('/admin/usuarios/{user}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/usuarios/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');

    // Servicios
    Route::get('servicios', [ServicioUserController::class, 'index'])->name('servicios.index');
    Route::get('servicios/{id}', [ServicioUserController::class, 'show']);
    Route::post('servicios', [ServicioUserController::class, 'store'])->name('servicios.store');
    Route::put('servicios/{id}', [ServicioUserController::class, 'update'])->name('servicios.update');
    Route::delete('servicios/{id}', [ServicioUserController::class, 'destroy'])->name('servicios.destroy');
    Route::get('servicios-compartir/{token}', [CompartirControler::class, 'servicios'])->name('servicios.compartir');

    // Ubicacion
    Route::get('ubicacion', [LocationController::class, 'index'])->name('ubicacion.index');
    Route::post('ubicacion', [LocationController::class, 'updateLocation'])->name('update.location');
});

// Compartir
Route::get('/compartir/{login_token}', [CompartirControler::class, 'show'])->name('compartir.show');

// QR Code
Route::get('/qr-compartir/{token}', [CompartirControler::class, 'show'])->name('qr.compartir');

// Nosotros
Route::get('/nosotros/{token}', [CompartirControler::class, 'nosotros'])->name('nosotros.compartir');

// Redes
Route::get('/redes/{token}', [CompartirControler::class, 'redes'])->name('redes.compartir');

// Servicios
Route::get('/servicios-compartir/{token}', [CompartirControler::class, 'servicios'])->name('servicios.compartir');

// Ubicacion
Route::get('/ubicacion/{token}', [CompartirControler::class, 'ubicacion'])->name('ubicacion.compartir');

require __DIR__ . '/auth.php';
