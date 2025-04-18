<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaylistController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('playlists', App\Http\Controllers\PlaylistController::class);
Route::resource('videos', App\Http\Controllers\VideoController::class);