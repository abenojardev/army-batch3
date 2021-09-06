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

Route::post('/create/save',[
    PersonnelController::class,
    'create_save'
])->name('create_save');