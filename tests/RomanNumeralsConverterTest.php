<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class RomanNumeralsConverterTest extends TestCase
{
    public function testRuleForFive(): void {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(5);
        $this->assertSame('V', $result);
    }
}