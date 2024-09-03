<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PodcastController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/podcasts', PodcastController::class);
