<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\RoomController;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/api-room', [RoomController::class, 'index']);
Route::get('/api-article', [ArticleController::class, 'index']);
