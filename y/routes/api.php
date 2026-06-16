<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Mendaftarkan endpoint login admin
Route::post('/login', [AuthController::class, 'login']);
