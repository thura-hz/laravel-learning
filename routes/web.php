<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greet/{name}', [App\Http\Controllers\GreetingController::class, 'greet']);


