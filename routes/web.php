<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class ,'show'])->name('contact.show');

Route::post('/contact/send', [ContactController::class, 'submit'])->name('contact.submit');
