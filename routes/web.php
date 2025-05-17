<?php


use App\Http\Controllers\WEB\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WEB\AlunoController;
use App\Http\Controllers\WEB\ProfessorController;
use App\Http\Controllers\WEB\CategoriaController;



Route::get('/users',[UserController::class,'index']);
Route::get('/users/{id}',[UserController::class,'show']);

Route::get('/alunos',[AlunoController::class,'index']);
Route::get('/alunos/{id}',[AlunoController::class,'show']);
Route::get('/aluno',[AlunoController::class,'create']);
Route::post('/aluno',[AlunoController::class,'store']);
Route::get('/aluno/{id}/edit',[AlunoController::class,'edit'])->name('aluno.edit');
Route::post('/aluno/{id}/update',[AlunoController::class,'update'])->name('aluno.update');
Route::get('/aluno/{id}/delete',[AlunoController::class,'delete'])->name('aluno.delete'); // preciso ter isso em todas as rotas de edição e remoção, pois se não, não acha
Route::post('/aluno/{id}/delete',[AlunoController::class,'remove'])->name('aluno.remove');

Route::get('/professores',[ProfessorController::class,'index']);
Route::get('/professores/{id}',[ProfessorController::class,'show']);
Route::get('/professores',[ProfessorController::class,'create']);
Route::post('/professores',[ProfessorController::class,'store']);


Route::get('/categorias',[CategoriaController::class,'index']);
Route::get('/categorias/{id}',[CategoriaController::class,'show']);
Route::get('/categorias',[CategoriaController::class,'create']);
Route::post('/categorias',[CategoriaController::class,'store']);
