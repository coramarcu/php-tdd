<?php declare(strict_types=1);

final class RomanNumeralsConverter {
    public function convertToRoman(int $number): string {
        switch ($number) {
            case 5:
                return "V";
            case 10:
                return "X";
            case 50: 
                return "L";
        }
    }
}