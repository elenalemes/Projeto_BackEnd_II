<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use App\Http\Requests\AlunoStoreRequest;
use App\Http\Requests\AlunoUpdateRequest;
use App\Http\Resources\AlunoCollection;
use App\Http\Resources\AlunoResource;
use App\Http\Resources\AlunoStoredResource;
use App\Models\Aluno;
use Exception;
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
        return $request->all();
        try{
            return new AlunoStoredResource(Aluno::create($request->validated()));
        } catch (\Exception $e) {
            return $this->errorHandler('Erro ao criar o aluno.',$e);
        }

    }

    public function show($id)
    {
        try {
            $aluno = Aluno::findOrFail($id);
            return new AlunoResource($aluno);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return $this->errorHandler('Aluno não encontrado.', $e, 404);
        } catch (\Exception $e) {
            return $this->errorHandler('Erro ao exibir o aluno.', $e);
        }
    }

    public function update(AlunoUpdateRequest $request, Aluno $aluno)
    {
        try {
            $aluno->update($request->validated());
            return new AlunoResource($aluno);
        } catch (\Exception $e) {
            return $this->errorHandler('Erro ao atualizar produto',$e);
        }
    }

    public function destroy(Aluno $aluno)
    {
        try {
            $aluno->delete();
            return response()->json([
                'data' => new AlunoResource($aluno),
                'message' => 'Aluno deletado com sucesso!'
            ]);
        } catch (\Exception $e) {
            return $this->errorHandler('Erro ao atualizar o aluno.',$e);
        }
    }
}
