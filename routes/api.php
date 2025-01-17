<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::get('/users', [AuthController::class, 'getUser']);

//TODO: Need improvement (Adding middleware when logout)
Route::post('/logout', [AuthController::class, 'logout']);


