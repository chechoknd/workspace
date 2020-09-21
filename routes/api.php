<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'users'], function() {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store']);
    Route::put('/{user}', [UserController::class, 'update']);
    Route::get('/{user}', [UserController::class, 'show']);
    Route::delete('/{user}', [UserController::class, 'destroy']);
});

Route::group(['prefix' => 'roles'], function () {
    Route::get('/', [RoleController::class, 'index']);
    Route::post('/', [RoleController::class, 'store']);
    Route::put('/{roles}', [RoleController::class, 'update']);
    Route::get('/{roles}', [RoleController::class, 'show']);
    Route::delete('/{roles}', [RoleController::class, 'destroy']);
});
