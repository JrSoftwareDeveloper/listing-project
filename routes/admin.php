<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeroController;

Route::prefix('admin')->as('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'login'])->name('login');

    Route::middleware('auth')->middleware('user.type:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Profile Routes
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::put('/profile-password', [ProfileController::class, 'passwordUpdate'])->name('profile-password.update');

        // Hero Routes
        Route::get('/hero', [HeroController::class, 'index'])->name('hero');
        Route::put('/hero', [HeroController::class, 'update'])->name('hero.update');
    });
});
