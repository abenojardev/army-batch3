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

Route::get('/author/create', [
    AuthorController::class,
    'create'
])->name('author.create');


Route::get('/category', [
    CategoryController::class,
    'index'
])->name('category.home');

Route::get('/category/create', [
    CategoryController::class,
    'create'
])->name('category.create');

Route::post('/category/create', [
    CategoryController::class,
    'create_save'
])->name('category.create.save');