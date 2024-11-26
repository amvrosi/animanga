<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/carts', [CartController::class, 'index'])->name('cart.index');
    Route::post('/carts', [CartController::class, 'store'])->name('cart.store');
    Route::delete('/carts/{cart}', [CartController::class, 'destroy'])->name('cart.delete');
});

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/manga', [ProductController::class, 'manga'])->name('product.manga');
Route::get('/products/merch', [ProductController::class, 'merch'])->name('product.merch');
Route::get('/genres/{genre}', [ProductController::class, 'genre'])->name('product.genre');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/search', [ProductController::class, 'search'])->name('product.search');

require __DIR__.'/auth.php';
