<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class RomanNumeralsConverterTest extends TestCase
{
    public function testThat5ConvertsToV(): void {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(5);
        $this->assertSame('V', $result);
    }

    public function testThat10ConvertsToX(): void {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(10);
        $this->assertSame('X', $result);
    }

    public function testThat50ConvertsToL(): void {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(50);
        $this->assertSame('L', $result);
    }

    public function testThat100ConvertsToC(): void {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(100);
        $this->assertSame('C', $result);
    }

    public function testThat500ConvertsToD(): void {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(500);
        $this->assertSame('D', $result);
    }
}