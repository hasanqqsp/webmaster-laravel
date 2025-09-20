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

Route::get('/admin/products', [\App\Http\Controllers\ProductController::class, 'index']);

Route::get('/admin/products/create', [\App\Http\Controllers\ProductController::class, 'create']);
Route::post('/admin/products', [\App\Http\Controllers\ProductController::class, 'store'])->name('admin.products.store');
Route::post('/admin/products/categories', [\App\Http\Controllers\ProductController::class, 'addCategory'])->name('admin.categories.store');
Route::delete('/admin/products/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('admin.products.destroy');

Route::get('/cart', function () {
    return view('cart');
});
