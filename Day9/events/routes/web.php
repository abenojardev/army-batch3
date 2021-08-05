<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;

Route::get('/',[
    EventsController::class,
    'index'
])->name('index');
Route::get('/create',[
    EventsController::class,
    'create'
])->name('create');
Route::get('/update',[
    EventsController::class,
    'update'
])->name('update');
Route::get('/delete',[
    EventsController::class,
    'delete'
])->name('delete');