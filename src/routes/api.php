<?php

use Illuminate\Support\Facades\Route;

Route::resource('books', App\Http\Controllers\API\BookAPIController::class);
Route::resource('reviews', App\Http\Controllers\API\ReviewAPIController::class);
