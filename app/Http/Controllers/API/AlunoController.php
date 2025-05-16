<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AlunoCollection;
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
    public function store(Request $request)
    {
        $aluno = $request->all();
        $aluno['importado'] = $request->has('importado');

        try{
            Aluno::create($aluno);
            return response()->json([
                'message' => 'Aluno criado com sucesso!',
                'data'=> $aluno
            ], 201);
        }catch (\Exception $e) {
            $response = [
                'message' => 'Erro ao criar o aluno.',
            ];

            if (env("APP_DEBUG")) {
                $response['error'] = $e->getMessage();
            }

            return response()->json($response, 500);
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
    public function update(Request $request, Aluno $aluno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aluno $aluno)
    {
        //
    }
}
