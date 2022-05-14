<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiRequest;
use App\Repository\ConvertToIntegerRepository;

class ApiController extends Controller
{
    public function __construct(private ConvertToIntegerRepository $repository)
    {
    }

    public function search(ApiRequest $request)
    {
        //Executa a validação da requisição enviada.
        $validated = $request->validated();

        //Retorna a resposta da requisição enviada, caso ela seja válida.
        return response()->json([
            'number' => $validated['text'],
            'value' => $this->repository->convertToInteger($validated['text']),
        ], 200);
    }
}
