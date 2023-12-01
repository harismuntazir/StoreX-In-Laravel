<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductController::class, 'list'])->name('app');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Product List
Route::get('/products', [ProductController::class, 'list'])->name('products.list');

// Product Details
Route::get('/products/{id}', [ProductController::class, 'product'])->name('products.product');

Route::middleware('auth')->group(function () {
    // Edit Product
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

    // Add Product
    Route::get('/add-product', [ProductController::class, 'create'])->name('products.create');
    Route::post('/add-product', [ProductController::class, 'store'])->name('products.store');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Invoice Maker
    Route::get('/invoice', [ProductController::class, 'invoice'])->name('invoice');
});

// About Us
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

// Search Products
Route::get('/search', function () {
    return view('search-bar');
})->name('search');

// Auth routes
require __DIR__.'/auth.php';