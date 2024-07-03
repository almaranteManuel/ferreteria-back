<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/////PRODUCTS/////
Route::get('products', [ProductController::class, 'index']);
Route::post('product/create', [ProductController::class, 'store']);


/////CATEGORIES/////
Route::get('categories', [CategoryController::class, 'index']);
