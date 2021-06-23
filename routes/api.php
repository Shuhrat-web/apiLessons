<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\PostCommentController;

Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::patch('users/{user}', [UserController::class, 'update']);
Route::delete('users/{user}', [UserController::class, 'destroy']);
Route::get('users/posts/{user}', [UserController::class, 'showPost']);

Route::get('posts',[PostController::class,'index']);
Route::patch('posts/{post}', [PostController::class, 'update']);
Route::post('posts',[PostController::class,'store']);
Route::delete('posts/{post}', [PostController::class, 'destroy']);
Route::get('posts/{post}', [PostController::class, 'show']);

// Route::apiResource('users', UserController::class);
// Route::apiResource('posts', PostController::class);
Route::apiResource('comments', CommentController::class);

Route::get('users/{user}/posts', [UserPostController::class, 'index']);
Route::get('posts/{post}/comments', [PostCommentController::class, 'index']);
