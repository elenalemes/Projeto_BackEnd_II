<?php

namespace App\Http\Controllers\Api;

use App\Http\Api\Controller;
use App\Http\Controllers\Api\Controller as ApiController;
use App\Http\Requests\CategoriaStoreRequest;
use App\Http\Requests\CategoriaUpdateRequest;
use App\Http\Resources\CategoriaCollection;
use App\Http\Resources\CategoriaResource;
use App\Http\Resources\CategoriaStoredResource;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new CategoriaCollection(Categoria::all());
    }

    public function store(CategoriaStoreRequest $request){
        return $request->all();
        try{
            return new CategoriaStoredResource(Categoria::create($request->validated()));
        } catch (\Exception $e) {
            return $this->errorHandler('Erro ao criar a categoria.',$e);
        }

    }

    public function show($id)
    {
        try {
            $categoria = Categoria::findOrFail($id);
            return new CategoriaResource($categoria);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return $this->errorHandler('Categoria não encontrada.', $e, 404);
        } catch (\Exception $e) {
            return $this->errorHandler('Erro ao exibir a categoria.', $e);
        }
    }

    public function update(CategoriaUpdateRequest $request, Categoria $categoria)
    {
        try {
            $categoria->update($request->validated());
            return new CategoriaResource($categoria);
        } catch (\Exception $e) {
            return $this->errorHandler('Erro ao atualizar a categoria.',$e);
        }
    }
    public function destroy(Categoria $categoria)
    {
        try {
            $categoria->delete();
            return response()->json([
                'data' => new CategoriaResource($categoria),
                'message' => 'Categoria deletada com sucesso!'
            ]);
        } catch (\Exception $e) {
            return $this->errorHandler('Erro ao atualizar a categoria.',$e);
        }
    }
}
