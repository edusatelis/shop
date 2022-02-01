<?php

use Illuminate\Support\Facades\Route;


Route::namespace('\App\Web\Product\Controllers')->group(function (){
    Route::get('/', 'ProductController@home');
    Route::get('/products', 'ProductController@index');
    Route::get('/products/{id}', 'ProductController@show');
    Route::get('/cart', 'ProductController@cart');
});

Route::namespace('\App\Web\Category\Controllers')->group(function (){
    Route::get('/category', 'CategoryController@index');
    Route::get('/category/{id}', 'CategoryController@show');

});


// Route::get('/', [HomeController::class, 'index']);

// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products/{id}', [ProductController::class, 'show']);

// Route::get('/cart', [CartController::class, 'index']);



// Route::get('/category', [CategoryController::class, 'index']);
// Route::get('/category/{id}', [CategoryController::class, 'show']);

