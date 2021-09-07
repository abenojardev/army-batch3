<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// public
Route::get('/',[
    AuthController::class,
    'index'
])->name('login')->middleware('guest');

Route::post('/verify',[
    AuthController::class,
    'verify'
])->name('verify')->middleware('guest');

// restricted
Route::get('/home',[
    AuthController::class,
    'home'
])->name('home')->middleware('user');

Route::get('/logout',[
    AuthController::class,
    'logout'
])->name('logout')->middleware('user');