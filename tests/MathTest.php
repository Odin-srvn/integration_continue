<?php

use PHPUnit\Framework\TestCase;
use App\Math;

class MathTest extends TestCase
{
    private Math $math;

    protected function setUp(): void
    {
        $this->math = new Math();
    }

    public function testAddition(): void
    {
        $this->assertEquals(5, $this->math->addition(2, 3));
        $this->assertEquals(0, $this->math->addition(-2, 2));
    }

    public function testSoustraction(): void
    {
        $this->assertEquals(1, $this->math->soustraction(3, 2));
        $this->assertEquals(-4, $this->math->soustraction(-2, 2));
    }

    public function testMultiplication(): void
    {
        $this->assertEquals(6, $this->math->multiplication(2, 3));
        $this->assertEquals(0, $this->math->multiplication(0, 5));
    }

    public function testDivision(): void
    {
        $this->assertEquals(2, $this->math->division(6, 3));
        $this->assertEquals(0.5, $this->math->division(1, 2));
    }

    public function testDivisionParZero(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->math->division(5, 0);
    }
}
