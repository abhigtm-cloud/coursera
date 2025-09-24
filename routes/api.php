<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseApiController;

// API routes - these will be prefixed with /api automatically
Route::get('/user', function (Request $request) {
    return response()->json(['message' => 'Hello from API']);
});

// Example API route using controller
Route::get('/users', [UserController::class, 'getuser']);

