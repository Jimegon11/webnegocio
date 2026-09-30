<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);
Route::post('/users/create', [UserController::class, 'create']);
Route::post('/users/login', [UserController::class, 'login']);
Route::put('/users/update_username', [UserController::class, 'updateUsername']);
Route::put('/users/update_email', [UserController::class, 'updateEmail']);
Route::put('/users/update_password', [UserController::class, 'updatePassword']);
Route::delete('/users/delete', [UserController::class, 'delete']);
