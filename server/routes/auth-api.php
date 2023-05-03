<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

Route::post('/register',   [AuthController::class, 'register']);
Route::post('/login',   [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout',  [AuthController::class, 'logout']);
