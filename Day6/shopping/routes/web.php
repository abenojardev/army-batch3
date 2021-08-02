<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoppingController;

Route::get('/', [
    ShoppingController::class,
    'index'
])->name('shopping.home');

Route::get('/create', [
    ShoppingController::class,
    'create'
])->name('shopping.create');

Route::get('/update', [
    ShoppingController::class,
    'update'
])->name('shopping.update');

Route::get('/delete', [
    ShoppingController::class,
    'delete'
])->name('shopping.delete');