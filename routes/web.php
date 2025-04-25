<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\CategoriaController;

Route::get('/users',[UserController::class,'index']);
Route::get('/users/{id}',[UserController::class,'show']);

Route::get('/alunos',[AlunoController::class,'index']);
Route::get('/alunos/{id}',[AlunoController::class,'show']);
Route::get('/alunos',[AlunoController::class,'create']);
Route::post('/alunos',[AlunoController::class,'store']);
Route::get('/alunos/{id}/edit',[AlunoController::class,'edit']);
Route::post('/alunos/{id}',[AlunoController::class,'update']);
Route::get('/alunos/{id}/delete',[AlunoController::class,'delete']);

Route::get('/professores',[ProfessorController::class,'index']);
Route::get('/professores/{id}',[ProfessorController::class,'show']);
Route::get('/professores',[ProfessorController::class,'create']);
Route::post('/professores',[ProfessorController::class,'store']);


Route::get('/categorias',[CategoriaController::class,'index']);
Route::get('/categorias/{id}',[CategoriaController::class,'show']);
Route::get('/categorias',[CategoriaController::class,'create']);
Route::post('/categorias',[CategoriaController::class,'store']);
