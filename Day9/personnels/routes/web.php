<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonnelController;

Route::get('/',[
    PersonnelController::class,
    'index'
])->name('home');

Route::get('/create',[
    PersonnelController::class,
    'create'
])->name('create');