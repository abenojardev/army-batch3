<?php

use App\Http\Controllers\Site\AuthController;

Route::get('/login', [
    AuthController::class,
    'index'
])->name('login');

Route::get('/register', [
AuthController::class,
    'register'
])->name('register');