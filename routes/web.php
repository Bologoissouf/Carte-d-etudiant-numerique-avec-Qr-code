<?php
use app\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    });

Route::get('/test',[UserController::class, 'method1']);

Route::get('/example', [UserController::class, 'example']);