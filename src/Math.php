<?php

namespace App;

class Math
{
    public function addition(float $a, float $b): float
    {
        return $a + $b;
    }

    public function soustraction(float $a, float $b): float
    {
        return $a - $b;
    }

    public function multiplication(float $a, float $b): float
    {
        return $a * $b;
    }

    public function division(float $a, float $b): float
    {
        if ($b == 0) {
            throw new \InvalidArgumentException('Division par zéro interdite.');
        }

        return $a / $b;
    }
}
