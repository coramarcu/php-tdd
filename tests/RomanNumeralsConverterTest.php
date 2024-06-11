<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once 'src/RomanNumeralsConverter.php';

final class RomanNumeralsConverterTest extends TestCase
{
    protected RomanNumeralsConverter $converter;
    protected function setUp(): void {
        parent::setUp();

        $this->converter = new RomanNumeralsConverter();
    }
    public function testThat1convertsToI(): void {
        $result = $this->converter->convertToRoman(1);
        $this->assertSame('I', $result);
    }
    public function testThat5ConvertsToV(): void {
        $result = $this->converter->convertToRoman(5);
        $this->assertSame('V', $result);
    }

    public function testThat10ConvertsToX(): void {
        $result = $this->converter->convertToRoman(10);
        $this->assertSame('X', $result);
    }

    public function testThat50ConvertsToL(): void {
        $result = $this->converter->convertToRoman(50);
        $this->assertSame('L', $result);
    }

    public function testThat100ConvertsToC(): void {
        $result = $this->converter->convertToRoman(100);
        $this->assertSame('C', $result);
    }

    public function testThat500ConvertsToD(): void {
        $result = $this->converter->convertToRoman(500);
        $this->assertSame('D', $result);
    }

    public function testThat1000ConvertsToM(): void {
        $result = $this->converter->convertToRoman(1000);
        $this->assertSame('M', $result);
    }

    public function testThat4ConvertsToIV(): void {
        $result = $this->converter->convertToRoman(4);
        $this->assertSame('IV', $result);
    }

    public function testThat9ConvertsToIX(): void {
        $result = $this->converter->convertToRoman(9);
        $this->assertSame('IX', $result);
    }

    public function testThat40ConvertsToXL(): void {
        $result = $this->converter->convertToRoman(40);
        $this->assertSame('XL', $result);
    }

    public function testThat90ConvertsToXC(): void {
        $result = $this->converter->convertToRoman(90);
        $this->assertSame('XC', $result);
    }

    public function testThat400ConvertsToCD(): void {
        $result = $this->converter->convertToRoman(400);
        $this->assertSame('CD', $result);
    }

    public function testThat900ConvertsToCM(): void {
        $result = $this->converter->convertToRoman(900);
        $this->assertSame('CM', $result);
    }

    public function testThatItWorksWithNumbersBetween1and4(): void {
        $result = $this->converter->convertToRoman(3);
        $this->assertSame('III', $result);
    }

    public function testThatItConverts49toXLIX(): void {
        $result = $this->converter->convertToRoman(49);
        $this->assertSame('XLIX', $result);
    }

    public function testThatItConverts1999toMCMXCIX(): void {
        $result = $this->converter->convertToRoman(1999);
        $this->assertSame('MCMXCIX', $result);
    }

}