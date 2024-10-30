<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentsController;

Route::get('/blogs', [BlogController::class, 'index']);
Route::post('/blogs', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/blogs/{id}', [BlogController::class, 'share']);