<?php

use App\Http\Controllers\Site\ListingsController;

Route::get('/', [
    ListingsController::class,
    'index'
])->name('homepage');