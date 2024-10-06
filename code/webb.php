<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


//Homepage
Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'indexLogin']);
Route::get('/registration', [HomeController::class, 'indexRegistration']);
Route::get('/beranda', [HomeController::class, 'indexBeranda']);
