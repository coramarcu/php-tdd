<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class RomanNumeralsConverterTest extends TestCase
{
    public function testThat1convertsToI(): void {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(1);
        $this->assertSame('I', $result);
    }
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

    public function testThat1000ConvertsToM(): void {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(1000);
        $this->assertSame('M', $result);
    }

    public function testThat4ConvertsToIV(): void {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(4);
        $this->assertSame('IV', $result);
    }

    public function testThat9ConvertsToIX(): void {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(9);
        $this->assertSame('IX', $result);
    }

    public function testThat40ConvertsToXL(): void {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(40);
        $this->assertSame('XL', $result);
    }

    public function testThat90ConvertsToXC(): void {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(90);
        $this->assertSame('XC', $result);
    }

    public function testThat400ConvertsToCD(): void {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(400);
        $this->assertSame('CD', $result);
    }

    public function testThat900ConvertsToCM(): void {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(900);
        $this->assertSame('CM', $result);
    }

}