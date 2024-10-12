<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;

Route::get('/', [MessageController::class, 'show']);
Route::get('/message/create', [MessageController::class, 'index']);
Route::post('/message/create', [MessageController::class, 'store']);