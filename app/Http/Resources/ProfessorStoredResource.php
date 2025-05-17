<?php

namespace App\Http\Resources;

use App\Models\Professor;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfessorStoredResource extends ProfessorResource
{

    public function withResponse(Request $request, JsonResponse $response)
    {
        $response->setStatusCode(201,"Professor criado com sucesso!");
    }

    public function with($request): array
    {
      return [
          'message' => 'Professor criado com sucesso',
      ];
    }
}
