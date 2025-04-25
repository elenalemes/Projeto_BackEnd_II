<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

//Route::get('/hola',[HomeController::class,'index']);
Route::get('/users',[UserController::class,'index']);
Route::get('/users/{id}',[UserController::class,'show']);
Route::post('/alunos',[AlunoController::class,'index']);
