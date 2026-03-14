<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('hello'); 
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('/contact');
});
Route::get('/products', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);

Route::post('/cart/add/{id}', [CartController::class, 'add']);
Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/remove/{id}', [CartController::class, 'remove']);
