<?php

namespace App\Repository;

use App\Enums\RomanNumerals;

class ConvertToDecimalRepository
{
    public function convertToDecimal(string $roman): int
    {
        $result = 0;
        $roman = strtoupper($roman);

        for ($i = 0; $i < strlen($roman); $i++) {
            if($i > 0 && $this->convert($roman[$i]) > $this->convert($roman[$i - 1])) {
                $result += $this->convert($roman[$i]) - 2 * $this->convert($roman[$i - 1]);
            } else {
                $result += $this->convert($roman[$i]);
            }
        }

        return $result;
    }

    public function convert(string $roman): int
    {
        return RomanNumerals::convertRomanToInteger($roman);
    }
}
