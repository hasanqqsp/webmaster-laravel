<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
Route::get('/', function (Request $request) {
    return view('index');
});

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'store'])->name('register');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'authenticate'])->name('login');

Route::get('profile/{id}', [UserController::class, 'show']);

Route::get('/admin/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');

Route::get('/admin/products/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
Route::post('/admin/products', [\App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
Route::delete('/admin/products/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/admin/products/{id}/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
Route::put('/admin/products/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
// Route::get('/admin/products/{id}/images', [\App\Http\Controllers\ProductController::class, 'imagesIndex'])->name('products.images.index');
// Route::post('/admin/products/{id}/images', [\App\Http\Controllers\ProductController::class, 'imagesStore'])->name('products.images.store');
// Route::delete('/admin/products/images/{imageId}', [\App\Http\Controllers\ProductController::class, 'imagesDestroy'])->name('products.images.destroy');


Route::get('/admin/categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
Route::get('/admin/categories/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
Route::post('/admin/categories', [\App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
Route::delete('/admin/categories/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/admin/categories/{id}/edit', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/admin/categories/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');



Route::get('/cart', function () {
    return view('cart');
});
