<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


//Homepage
Route::get('/', [HomeController::class, 'index']);
Route::get('/beranda', [HomeController::class, 'indexBeranda']);

//Login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

//Register
Route::get('/registration', [RegisterController::class, 'create']);
Route::post('/registration', [RegisterController::class, 'store']);
