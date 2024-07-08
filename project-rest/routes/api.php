<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class,"login"]);
    Route::post('logout',[AuthController::class, "logout"]);
    Route::post('refresh',[AuthController::class, "refresh"]);
    Route::get('profile',[AuthController::class, "profile"]);
});

Route::get("/products/all",[ProductController::class,"index"]);
