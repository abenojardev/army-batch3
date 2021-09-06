<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;


Route::get('/', [
    BookController::class,
    'index'
])->name('book.home');

Route::get('/author', [
    AuthorController::class,
    'index'
])->name('author.home');