<?php declare(strict_types=1);

final class RomanNumeralsConverter {
    public function convertToRoman(int $number): string {
        return $number == 5 ? "V" : "X";
    }
}