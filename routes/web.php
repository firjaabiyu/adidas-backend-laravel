<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
});



Route::middleware(['auth'])->get('home', [UserController::class, 'index']);


// crud middleware
Route::resource('product', ProductController::class);