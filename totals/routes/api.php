<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class, "login"]);
    Route::post('logout', [AuthController::class, "logout"]);
    Route::post('refresh', [AuthController::class, "refresh"]);
    Route::get('me', [AuthController::class, "me"]);
});

Route::get("products/all",[ProductController::class,"index"]);
