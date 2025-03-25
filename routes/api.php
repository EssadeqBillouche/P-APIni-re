<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthJwtController;


Route::post('/register', [AuthJwtController::class, 'register']);
