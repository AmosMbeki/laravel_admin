<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function (){
    Route::get('user', [AuthController::class, 'user']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::put('user/info', [AuthController::class, 'updateInfo']);
    Route::put('user/password', [AuthController::class, 'updatePassword']);    

    // Route::get('users', [UserController::class, 'index']);
    // Route::post('users', [UserController::class, 'store']);
    // Route::get('users/{id}', [UserController::class, 'show']);
    // Route::get('users/{id}', [UserController::class, 'update']);
    // Route::get('users/{id}', [UserController::class, 'destroy']);

    Route::apiResource('users', UserController::class);
    Route::get('permissions', [PermissionController::class, 'index']);
    Route::apiResource('roles', RoleController::class);
});
