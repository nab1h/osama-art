<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AchievementController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/portfolio/{portfolio}', [PageController::class, 'show'])->name('portfolio.show');
Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
Route::post('/contact-send', [PageController::class, 'contact'])
    ->name('contact.send');


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
    Route::get('portfolios/delete-image/{id}', [PortfolioController::class, 'deleteImage'])->name('portfolios.delete.image');
    // Achievement------------
    Route::resource('achievements', AchievementController::class);
    // Certificates------------
    Route::resource('certificates', CertificateController::class);
    // social-links------------
    Route::resource('social-links', SocialLinkController::class);
    // social-links------------
    // Route::resource('testimonials', TestimonialController::class);
    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
    Route::patch('/testimonials/{testimonial}/toggle', [TestimonialController::class, 'toggle'])
        ->name('testimonials.toggle');
    Route::delete('/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])
        ->name('testimonials.destroy');



    Route::get('/settings', [SettingController::class, 'edit'])
        ->name('settings.edit');

    Route::put('/settings', [SettingController::class, 'update'])
        ->name('settings.update');
});

require __DIR__ . '/auth.php';
