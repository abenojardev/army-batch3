<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;

/**
 * $type is not required '?'
 * http://localhost:8000/{type}
 * http://localhost:8000/simple_query
 */
Route::get('/{type?}',[
    QueryController::class,
    'index'
]);