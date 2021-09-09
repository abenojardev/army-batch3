<?php

use App\Http\Controllers\Site\ListingsController;

Route::get('/', [
    ListingsController::class,
    'index'
])->name('homepage');

Route::post('/add-to-cart', [
    ListingsController::class,
    'add_to_cart'
])->name('add.to.cart');