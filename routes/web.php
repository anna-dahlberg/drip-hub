<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index'])->middleware(['auth', 'verified'])
    ->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])->middleware(['auth', 'verified'])
    ->name('products.create');

Route::post('/products/store', [ProductController::class, 'store'])
    ->name('products.store');

Route::get('/products/{product}', [ProductController::class, 'show'])->middleware(['auth', 'verified'])
    ->name('products.show');

Route::get('/products/{article_number}/stock/{size}', [ProductController::class, 'getStock'])
    ->name('products.stock');

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->middleware(['auth', 'verified'])
    ->name('products.edit');

Route::patch('/products/{product}', [ProductController::class, 'update'])
    ->name('products.update');

Route::delete('/products/{product}', [ProductController::class, 'destroy'])
    ->name('products.destroy');

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::resource('users', UserController::class);
});

require __DIR__ . '/auth.php';
