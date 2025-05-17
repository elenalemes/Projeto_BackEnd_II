<?php

namespace App\Http\Controllers\Api;

use App\Http\Api\Controller;
use App\Http\Controllers\Api\Controller as ApiController;
use App\Http\Requests\CategoriaStoreRequest;
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriaStoreRequest $request){
        try{
            return new CategoriaStoredResource(Categoria::create($request->validated()));
        } catch (\Exception $e) {
            return $this->errorHandler('Erro ao criar a categoria.',$e);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
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
