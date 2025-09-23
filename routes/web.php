<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/',[ApiController::class,'getcser'])->middleware('CheckMid');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
