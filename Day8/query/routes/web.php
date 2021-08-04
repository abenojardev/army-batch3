<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;

Route::get('/{type?}',[
    QueryController::class,
    'index'
]);