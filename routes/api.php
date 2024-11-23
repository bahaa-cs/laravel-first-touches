<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\NewsController;


Route::get('/user', [UsersController::class, 'get_users']);
Route::prefix("/news")->group(function() {
    Route::get('/', [NewsController::class, 'get_news']);
    Route::get('/{id}', [NewsController::class, 'get_single_news']);
    Route::post('/', [NewsController::class, 'create_news']);
    Route::put('/{id}', [NewsController::class, 'update_news']);
    Route::delete('/{id}', [NewsController::class, 'delete_news']);
    Route::get('/{from_age}/{to_age}', [NewsController::class, 'restrict_news']);
});