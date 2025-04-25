<?php

//  use App\Http\Controllers\HomeController;
 use App\Http\Controllers\UserController;
 use Illuminate\Support\Facades\Route;



//  Route::get('/hola',[HomeController::class,'index']);
 Route::get('/users',[UserController::class,'index']);
Route::get('/users/{id}',[UserController::class,'show']);
