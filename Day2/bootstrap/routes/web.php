<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BootstrapController;

Route::get('/',[
    BootstrapController::class,
    'index'
])->name('home');  

Route::get('/dashboard',[
    BootstrapController::class,
    'dashboard'
])->name('dashboard');  