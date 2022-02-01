<?php

use Illuminate\Support\Facades\Route;
use App\Core\Http\Controllers\CategoryController;
use App\Core\Http\Controllers\ProductController;
use App\Core\Http\Controllers\HomeController;
use App\Core\Http\Controllers\CartController;


Route::namespace('\App\Web\Product\Controllers')->group(function (){
    Route::get('/', 'ProductController@index');
});


// Route::get('/', [HomeController::class, 'index']);

// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products/{id}', [ProductController::class, 'show']);

// Route::get('/cart', [CartController::class, 'index']);



// Route::get('/category', [CategoryController::class, 'index']);
// Route::get('/category/{id}', [CategoryController::class, 'show']);

