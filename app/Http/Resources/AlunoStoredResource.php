<?php

namespace App\Http\Resources;

use App\Models\Aluno;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AlunoStoredResource extends AlunoResource
{

    public function withResponse(Request $request, JsonResponse $response)
    {
        $response->setStatusCode(201,"Aluno Criado!");
    }

    public function with($request): array
    {
      return [
          'message' => 'Aluno criado com sucesso',
      ];
    }
}
