<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AchievementController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

    // admin dashboard-------
        Route::view('/', 'admin.dashboard')->name('dashboard');
    // Categories-------------
        Route::resource('categories', CategoryController::class);
    // Portfolio------------
    Route::resource('portfolios', PortfolioController::class);
    Route::get('portfolios/{portfolio}/delete-image/{index}', [PortfolioController::class, 'deleteImage'])->name('portfolios.delete.image');

    });

require __DIR__ . '/auth.php';
