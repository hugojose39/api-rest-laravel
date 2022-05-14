<?php

namespace App\Repository;

use App\Enums\RomanNumerals;

class ConvertToDecimalRepository
{
    public function convertToDecimal(string $roman): int
    {
        //Cria uma variável inteira para armazenar o resultado.
        $result = 0;
        //Recebe o número romano enviado pela requisição e o transforma em letras maiúsculas para não gerar erro na validação.
        $roman = strtoupper($roman);

        //Inicializa o loop para iterar na string.
        for ($i = 0; $i < strlen($roman); $i++) {
            //Verifica o elemento atual não é menor que o anterior.
            if($i > 0 && $this->convert($roman[$i]) > $this->convert($roman[$i - 1])) {
                $result += $this->convert($roman[$i]) - 2 * $this->convert($roman[$i - 1]);
            } else {
                $result += $this->convert($roman[$i]);
            }
        }
        //Retorna o valor inteiro do número romano.
        return $result;
    }

    public function convert(string $roman): int
    {
        //Retorna o algarismo romano transformado em número decimal.
        return RomanNumerals::convertRomanToInteger($roman);
    }
}
