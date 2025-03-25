<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, "trending"]);
Route::get('/search', [MovieController::class, "search"]);
Route::get('/favorites', [MovieController::class, "favorites"]);
Route::post('/favorites/load', [MovieController::class, "loadFavorites"]);