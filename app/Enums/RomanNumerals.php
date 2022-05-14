<?php

namespace App\Enums;

class RomanNumerals
{
    public const ROMAN_NUMERAL_I = "I";
    public const ROMAN_NUMERAL_V = "V";
    public const ROMAN_NUMERAL_X = "X";
    public const ROMAN_NUMERAL_L = "L";
    public const ROMAN_NUMERAL_C = "C";
    public const ROMAN_NUMERAL_D = "D";
    public const ROMAN_NUMERAL_M = "M";

    public static function all(): array
    {
        // Retorna um array com os 7 algarismos romanos.
        return [
            self::ROMAN_NUMERAL_I,
            self::ROMAN_NUMERAL_V,
            self::ROMAN_NUMERAL_X,
            self::ROMAN_NUMERAL_L,
            self::ROMAN_NUMERAL_C,
            self::ROMAN_NUMERAL_D,
            self::ROMAN_NUMERAL_M,
        ];
    }

    public static function convertRomanToInteger(string $roman): int
    {
        // Retorna os algaritmos romanos com seus respectivos valores inteiros.
        return match ($roman) {
            self::ROMAN_NUMERAL_I => 1,
            self::ROMAN_NUMERAL_V => 5,
            self::ROMAN_NUMERAL_X => 10,
            self::ROMAN_NUMERAL_L => 50,
            self::ROMAN_NUMERAL_C => 100,
            self::ROMAN_NUMERAL_D => 500,
            self::ROMAN_NUMERAL_M => 1000,
        };
    }
}
