<?php declare(strict_types=1);

final class RomanNumeralsConverter {
    public function convertToRoman(int $number): string {
        switch (true) {
            case ($number == 1):
                return "I";
            case ($number >= 1 && $number < 4): {
                $roman_numeral = "";

                for($i = $number; $i >= 1; $i--) {
                    $roman_numeral .= "I";
                }
                return $roman_numeral;
            }
            case ($number == 4):
                return "IV";
            case ($number == 5):
                return "V";
            case ($number == 9):
                return "IX";
            case ($number == 10):
                return "X";
            case ($number == 40):
                return "XL";
            case ($number == 50): 
                return "L";
            case ($number == 90):
                return "XC";
            case ($number == 100):
                return "C";
            case ($number == 400):
                return "CD";
            case ($number == 500):
                return "D";
            case ($number == 900):
                return "CM";
            case ($number == 1000):
                return "M";
        }
    }
}