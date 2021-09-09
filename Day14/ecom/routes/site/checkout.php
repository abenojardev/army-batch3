<?php

use App\Http\Controllers\Site\CheckoutController;

Route::get('/checkout', [
    CheckoutController::class,
    'index'
])->name('checkout');