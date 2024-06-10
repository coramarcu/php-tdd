<?php declare(strict_types=1);

final class RomanNumeralsConverter {
    public function convertToRoman(int $number): string {
        $roman_symbols = [
            'M'  => 1000,
            'CM' => 900,
            'D'  => 500,
            'CD' => 400,
            'C'  => 100,
            'XC' => 90,
            'L'  => 50,
            'XL' => 40,
            'X'  => 10,
            'IX' => 9,
            'V'  => 5,
            'IV' => 4,
            'I'  => 1
        ];

        $roman_numeral = "";

        foreach ($roman_symbols as $symbol => $value) {
            while ($number >= $value) {
                $roman_numeral .= $symbol;
                $number -= $value;
            }
        }

        return $roman_numeral;
    }
}