<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\DoctorsController;

Route::get('/', [
    DoctorsController::class,
    'index'
]);