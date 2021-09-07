<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;


Route::get('/',                       [ BookController::class,    'index'        ])->name('book.home');
Route::get('/create',                 [ BookController::class,    'create'       ])->name('book.create');
Route::post('/create',                [ BookController::class,    'create_save'  ])->name('book.create.save');

Route::get('/author',                 [ AuthorController::class,  'index'        ])->name('author.home'); 
Route::get('/author/create',          [ AuthorController::class,  'create'       ])->name('author.create');
Route::post('/author/create',         [ AuthorController::class,  'create_save'  ])->name('author.create.save');
Route::get('/author/update/{id}',     [ AuthorController::class,  'update'       ])->name('author.update');
Route::post('/author/update/{id}',    [ AuthorController::class,  'update_save'  ])->name('author.update.save');
Route::get('/author/delete/{id}',     [ AuthorController::class,  'delete'       ])->name('author.delete');

Route::get('/category',               [ CategoryController::class, 'index'       ])->name('category.home');
Route::get('/category/create',        [ CategoryController::class, 'create'      ])->name('category.create');
Route::post('/category/create',       [ CategoryController::class, 'create_save' ])->name('category.create.save');
Route::get('/category/update/{id}',   [ CategoryController::class, 'update'      ])->name('category.update');
Route::post('/category/update/{id}',  [ CategoryController::class, 'update_save' ])->name('category.update.save');
Route::get('/category/delete/{id}',   [ CategoryController::class, 'delete'      ])->name('category.delete');
