<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\ChirpController;
<<<<<<< Updated upstream
=======
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
>>>>>>> Stashed changes

Route::inertia('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__ . '/settings.php';

Route::get(
    '/chirps',
    [ChirpController::class, 'index']
);
<<<<<<< Updated upstream
=======
Route::post(
    '/chirps',
    [ChirpController::class, 'store']
);

Route::get('/', [ProductController::class, 'index']);
Route::get(
    '/products/{product}',
    [ProductController::class, 'show']
);
Route::post(
    '/cart',
    [CartController::class, 'store']
);
Route::get(
    '/cart',
    [CartController::class, 'index']
);
Route::get(
    '/cart/clear',
    [CartController::class, 'clear']
);
>>>>>>> Stashed changes
