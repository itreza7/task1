<?php

namespace Tests\Unit;

use App\Classes\Square;
use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase
{
    /** @test */
    public function calculate_perimeter(): void{
        $square = new Square(2);
        $actual = $square->get_perimeter();
        $this->assertEquals(8, $actual);
    }

    /** @test */
    public function calculate_area(): void{
        $square = new Square(2);
        $actual = $square->get_area();
        $this->assertEquals(4, $actual);
    }
}