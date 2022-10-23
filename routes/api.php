<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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
    Route::apiResource('products', ProductController::class);
    Route::apiResource('roles', RoleController::class);
    Route::post('upload', [ImageController::class, 'upload']);
    // Route::get('orders', [OrderController::class, 'index']);
    // Route::get('orders/{id}', [OrderController::class, 'show']);

    Route::apiResource('orders', OrderController::class)->only('index', 'show');

    Route::post('export', [OrderController::class, 'export']);
    Route::get('chart', [OrderController::class, 'chart']);
});
