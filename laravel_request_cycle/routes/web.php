<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\PageController;

Route::get('/', [
    PageController::class,
    'home'
]);
Route::get('/about-us', [
    PageController::class,
    'aboutus'
]);
Route::get('/contact', [
    PageController::class,
    'contact'
]);
Route::get('/gallery', [
    PageController::class,
    'gallery'
]);
Route::get('/services', [
    PageController::class,
    'services'
]);