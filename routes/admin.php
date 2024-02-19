<?php

use App\Models\Amenity;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\AmenityController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ListingController;

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

        // Category Routes
        Route::resource('categories', CategoryController::class);
        Route::resource('locations', LocationController::class);
        Route::resource('amenity', AmenityController::class);
        Route::resource('listing', ListingController::class);
    });
});
