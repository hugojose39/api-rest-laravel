<?php

namespace App\Rules;

use App\Enums\RomanNumerals;
use Illuminate\Contracts\Validation\Rule;

class IsRomanNumeral implements Rule
{
    public function passes($attribute, $value): bool
    {
        $numeral = str_split(strtoupper($value));
        //Regra de validação sobre o algarismo recebido, retorna true se ele for um algarismo romano válido.
        return count(array_diff($numeral, RomanNumerals::all())) === 0;
    }

    public function message(): string
    {
        //Mensagem retornada se a função acima retornar false.
        return 'Sua requisição falhou, por favor tente novamente com números romanos válidos!';
    }
}
