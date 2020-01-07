<?php
namespace Calculator;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    function testShallPass(): void {
        $this->assertNotNull(new Calculator());
    }
}
