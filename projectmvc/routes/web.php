<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// user auth
Route::post('login', [AuthController::class, "login"]);


// dashboard
Route::get('dashboard', [AuthController::class, 'getAll']);


// category
Route::get('categories', [CategoryController::class, "getAll"])->middleware("role:admin"); // || middleware("role:admin,user")
