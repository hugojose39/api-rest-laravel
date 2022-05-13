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
        $validated = $request->validated();

        return response()->json([
            'number' => $validated['text'],
            'value' => $this->repository->convertToDecimal($validated['text']),
        ], 200);
    }
}
