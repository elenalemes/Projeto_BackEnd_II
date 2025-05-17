<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AlunoController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\ProfessorController;
use App\Http\Controllers\CategoriaController as ControllersCategoriaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    Route::apiResource('alunos', AlunoController::class);
});

Route::prefix('v1')->group(function () {
    Route::apiResource('professores', ProfessorController::class);
});

Route::prefix('v1')->group(function () {
    Route::apiResource('categorias', CategoriaController::class);
});

