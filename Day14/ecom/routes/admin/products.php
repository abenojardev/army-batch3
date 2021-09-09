<?php

use App\Http\Controllers\Admin\ProductsController;

Route::get('/products', [
    ProductsController::class,
    'index'
])->name('admin.products');

Route::get('/products/create', [
    ProductsController::class,
    'create'
])->name('admin.products.create');