<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;

Route::get('/',[
    QueryController::class,
    'index'
]);