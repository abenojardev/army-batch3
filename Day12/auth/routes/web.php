<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// public
Route::get('/',[
    AuthController::class,
    'index'
])->name('login');

// restricted
Route::get('/home',[
    AuthController::class,
    'home'
])->name('home');