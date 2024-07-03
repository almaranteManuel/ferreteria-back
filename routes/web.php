<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

/////MIDDLEWARE/////
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function () {
    return view('dashboard.dashboard');
});

/////PUBLICS/////
Route::get('/show', [AuthController::class, 'showRegistrationForm']);
Route::get('/show-login', [AuthController::class, 'showLoginForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/profile', [ProfileController::class, 'edit']);

/////PRODUCTS/////
Route::get('/products', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/store', [ProductController::class, 'store']);
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::get('/product/detail/{id}', [ProductController::class, 'detail']);
Route::delete('/product/delete/{id}', [ProductController::class, 'delete']);

/////CATEGORIES/////
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::put('/category/update/{category}', [CategoryController::class, 'update']);

