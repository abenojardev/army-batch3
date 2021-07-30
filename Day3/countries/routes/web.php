<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
 

Route::get('/', [
    CountryController::class,
    'index'
])->name('country');


Route::get('/table', [
    CountryController::class,
    'table'
])->name('table');
