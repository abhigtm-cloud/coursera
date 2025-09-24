<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\CourseApiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/',[CourseApiController::class,'getcser'])->middleware('CheckMid');
Route::post('/store',[CourseApiController::class,'store']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
