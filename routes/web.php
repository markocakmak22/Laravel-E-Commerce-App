<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/", [CategoryController::class, "home"])->name('home');
Route::get('/category/{id}', [ProductController::class, 'getProductsByCategory'])->name('category.show');
Route::get('/category/product/{id}', [ProductController::class, 'getProductById'])->name('category.product');

