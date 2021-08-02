<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoppingController;

Route::get('/', [
    ShoppingController::class,
    'index'
])->name('shopping.home');