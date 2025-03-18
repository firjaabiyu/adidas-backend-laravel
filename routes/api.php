<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//login pertam utk tampil di url, login kedua nama method di controller
Route::post('login', [AuthController::class, 'login']);
// Route::post('register', [AuthController::class, 'register']);

// route logout
// Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// route product



Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('allproduct', [ProductController::class, 'all']);
    Route::get('user', [AuthController::class, 'getuser']);
});
