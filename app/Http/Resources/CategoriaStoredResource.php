<?php

namespace App\Http\Resources;

use App\Models\categoria;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoriaStoredResource extends CategoriaResource
{

    public function withResponse(Request $request, JsonResponse $response)
    {
        $response->setStatusCode(201,"Categoria criada!");
    }

    public function with($request): array
    {
      return [
          'message' => 'Categoria criada com sucesso',
      ];
    }
}
