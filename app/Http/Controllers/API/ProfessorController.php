<?php

namespace App\Http\Controllers\Api;

use App\Http\Api\Controller;
use App\Http\Controllers\Api\Controller as ApiController;
use App\Http\Requests\ProfessorStoreRequest;
use App\Http\Requests\ProfessorUpdateRequest;
use App\Http\Resources\ProfessorCollection;
use App\Http\Resources\ProfessorResource;
use App\Http\Resources\ProfessorStoredResource;
use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ProfessorCollection(Professor::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfessorStoreRequest $request){
        try{
            return new ProfessorStoredResource(Professor::create($request->validated()));
        } catch (\Exception $e) {
            return $this->errorHandler('Erro ao criar o aluno.',$e);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Professor $professor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfessorUpdateRequest $request, Professor $professor)
    {
        try {
            $professor->update($request->validated());
            return new ProfessorResource($professor);
        } catch (\Exception $e) {
            return $this->errorHandler('Erro ao atualizar produto',$e);
        }
    }

    public function destroy(Professor $professor)
    {
        try {
            $professor->delete();
            return response()->json([
                'data' => new ProfessorResource($professor),
                'message' => 'Professor deletado com sucesso!'
            ]);
        } catch (\Exception $e) {
            return $this->errorHandler('Erro ao atualizar o professor.',$e);
        }
    }
}

