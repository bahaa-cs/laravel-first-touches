<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\NewsController;

Route::get('/user', [UsersController::class, 'get_users']);
Route::get('/news', [NewsController::class, 'get_news']);
Route::get('/news/{id}', [NewsController::class, 'get_single_news']);
