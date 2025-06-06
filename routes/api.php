<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AlunoController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\ProfessorController;
use App\Http\Controllers\Api\UserController;
use App\Models\User;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware("auth:sanctum");

Route::prefix('v1')->group(function () {
    Route::apiResource('alunos', AlunoController::class);
    Route::apiResource('professores', ProfessorController::class);
    Route::apiResource('categorias', CategoriaController::class);
    Route::get('users',function(){return User::all();});
    Route::apiResource("users",UserController::class);
});


