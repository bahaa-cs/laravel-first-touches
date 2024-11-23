<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UsersController;

Route::get('/user', [UsersController::class, 'get_users']);
