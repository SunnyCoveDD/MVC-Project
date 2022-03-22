<?php

use Controllers\MainController;
use Controllers\UserController;
use Controllers\PostController;

Route::get('/', [MainController::class, 'index']);

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'registerPost']);

Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'loginPost']);
Route::get('/post', [PostController::class, 'post']);