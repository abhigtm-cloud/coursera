<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/',[UserController::class,'getuser'])->middleware('CheckMid');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
