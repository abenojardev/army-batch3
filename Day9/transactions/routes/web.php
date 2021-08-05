<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

Route::get('/',[
    TransactionController::class,
    'view'
])->name('view');

Route::get('/create',[
    TransactionController::class,
    'create'
])->name('create');

Route::get('/update',[
    TransactionController::class,
    'update'
])->name('update');

Route::get('/delete',[
    TransactionController::class,
    'delete'
])->name('delete');