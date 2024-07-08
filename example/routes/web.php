<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class,"getProduct"]);
Route::post('/add-to-cart', [CartController::class, "addToCart"]);
Route::get('/get-carts', [CartController::class,"getCarts"]);
Route::delete('/delete-carts', [CartController::class, "deleteCartItem"]);
Route::put('/tru-carts', [CartController::class, "truCartItem"]);
Route::put('/cong-carts', [CartController::class, "congCartItem"]);



