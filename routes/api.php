<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::patch('users/{user}', [UserController::class, 'update']);
Route::delete('users/{user}', [UserController::class, 'destroy']);

// Route::resource('users', UserController::class)->except(['create', 'edit']);


Route::get('posts',[PostController::class,'index']);
Route::patch('posts/{post}', [PostController::class, 'update']);
Route::post('posts',[PostController::class,'store']);
Route::delete('posts/{post}', [PostController::class, 'destroy']);
Route::get('posts/{post}', [PostController::class, 'show']);

