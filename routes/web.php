<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\CategoriaController;

//Route::get('/hola',[HomeController::class,'index']);
Route::get('/users',[UserController::class,'index']);
Route::get('/users/{id}',[UserController::class,'show']);

Route::get('/alunos',[AlunoController::class,'index']);
Route::get('/alunos/{id}',[AlunoController::class,'show']);

Route::get('/professores',[ProfessorController::class,'index']);
Route::get('/professores/{id}',[ProfessorController::class,'show']);


Route::get('/categorias',[CategoriaController::class,'index']);
Route::get('/categorias/{id}',[CategoriaController::class,'show']);

