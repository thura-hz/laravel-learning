<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/greet/{name?}', [GreetingController::class,'greet']);

Route::apiResource('tasks', TaskController::class);