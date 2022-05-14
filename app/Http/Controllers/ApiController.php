<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiRequest;
use App\Repository\ConvertToDecimalRepository;

class ApiController extends Controller
{
    public function __construct(private ConvertToDecimalRepository $repository)
    {
    }

    public function search(ApiRequest $request)
    {
        //Executa a validação da requisição enviada.
        $validated = $request->validated();

        //Retorna a resposta da requisição enviada, caso ela seja válida.
        return response()->json([
            'number' => $validated['text'],
            'value' => $this->repository->convertToDecimal($validated['text']),
        ], 200);
    }
}
