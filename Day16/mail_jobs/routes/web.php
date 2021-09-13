<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;


Route::get('/',[
    MailController::class,
    'index'
])->name('form');

Route::post('/process',[
    MailController::class,
    'process'
])->name('form.process');

Route::view('/mail', 'mail.newsletter');