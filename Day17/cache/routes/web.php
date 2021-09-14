<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorsController;

Route::get('/', [
    DoctorsController::class,
    'index'
]);

Route::get('/with-cache', [
    DoctorsController::class,
    'with_cache'
]);