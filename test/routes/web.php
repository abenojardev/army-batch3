<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [
    TestController::class,
    'index'
]);

Route::get('/test/2', [
    TestController::class,
    'test_two'
]);
 
Route::get('/home', [
    TestController::class,
    'home'
]);
