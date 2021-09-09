<?php

use App\Http\Controllers\Site\AuthController;

Route::get('/login', [
    AuthController::class,
    'index'
])->name('login');