<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
 


Route::get('/messages',[MessageController::class, 'index']);
Route::get('/messages/{id}',[MessageController::class, 'show']);




Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/{id}',[PostController::class, 'show']);

Route::post('/login',[AuthController::class, 'login']);
Route::post('/register',[AuthController::class, 'register']);


Route::middleware('auth:sanctum')->group(function () {
    Route::delete('/messages/{id}',[MessageController::class, 'destroy']);
    Route::post('/messages',[MessageController::class, 'store']);
    Route::put('/messages/{id}',[MessageController::class, 'update']);
    
    Route::post('/logout',[AuthController::class, 'logout']);
});

