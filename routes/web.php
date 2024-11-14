<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\CompeticionController;

// Ruta principal
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rutas de autenticación
Route::middleware('guest')->group(function () {
    // Rutas de login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // Rutas de registro
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    // Ruta de logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Ruta del dashboard (accesible para todos los usuarios autenticados)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rutas de administrador
    Route::middleware('admin')->group(function () {
        // Aquí puedes agregar rutas específicas para administradores
        Route::get('/panel', function () {
            return view('seccion.panel');
        })->name('panel');
    });
});

// Rutas de recuperación de contraseña (deben estar en el middleware 'guest')
Route::middleware('guest')->group(function () {
    Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotForm'])->name('password.request');

    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');

    Route::get('/reset-password', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');

    Route::post('/reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');
});

Route::get('/dashboard', [CompeticionController::class, 'index'])->name('dashboard');
Route::post('/competicion', [CompeticionController::class, 'store'])->name('competicion.store');
Route::post('/competicion/verify-url', [CompeticionController::class, 'verifyUrl'])->name('competicion.verifyUrl');
