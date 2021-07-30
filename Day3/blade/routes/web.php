<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BladeController;

Route::get('/',[
    BladeController::class,
    'index'
])->name('display');


Route::get('/json',[
    BladeController::class,
    'json'
])->name('json');

Route::get('/html',[
    BladeController::class,
    'html'
])->name('html');

Route::get('/conditions',[
    BladeController::class,
    'conditions'
])->name('conditions');


Route::get('/loops',[
    BladeController::class,
    'loops'
])->name('loops');