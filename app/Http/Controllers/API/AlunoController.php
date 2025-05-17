<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use App\Http\Requests\AlunoStoreRequest;
use App\Http\Requests\AlunoUpdateRequest;
use App\Http\Resources\AlunoCollection;
use App\Http\Resources\AlunoResource;
use App\Http\Requests\ProdutoUpdateRequest;
use App\Http\Resources\AlunoStoredResource;
use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new AlunoCollection(Aluno::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlunoStoreRequest $request){
        try{
            return new AlunoStoredResource(Aluno::create($request->validated()));
        } catch (\Exception $e) {
            return $this->errorHandler('Erro ao criar o aluno.',$e);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Aluno $aluno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlunoUpdateRequest $request, Aluno $aluno)
    {
        try {
            $aluno->update($request->validated());
            return new AlunoResource($aluno);
        } catch (\Exception $e) {
            return $this->errorHandler('Erro ao atualizar produto',$e);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aluno $aluno)
    {
        try {
            $aluno->delete();
            return response()->json([
                'data' => new AlunoResource($aluno),
                'message' => 'Aluno deletado com sucesso!'
            ]);
        } catch (\Exception $e) {
            return $this->errorHandler('Erro ao excluir o aluno.',$e);
        }
    }
}
