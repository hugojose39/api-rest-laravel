<?php

namespace App\Http\Requests;

use App\Rules\IsRomanNumeral;
use Illuminate\Foundation\Http\FormRequest;

class ApiRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'text' => ['required', new IsRomanNumeral()],
        ];
    }
}
