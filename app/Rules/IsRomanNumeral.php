<?php

namespace App\Rules;

use App\Enums\RomanNumerals;
use Illuminate\Contracts\Validation\Rule;

class IsRomanNumeral implements Rule
{
    public function passes($attribute, $value): bool
    {
        $numeral = str_split(strtoupper($value));

        return count(array_diff($numeral, RomanNumerals::all())) === 0;
    }

    public function message(): string
    {
        return 'Sua requisição falhou, por favor tente novamente com números romanos válidos!';
    }
}
