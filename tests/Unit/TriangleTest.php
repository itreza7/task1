<?php

namespace Tests\Unit;

use App\Classes\Triangle;
use PHPUnit\Framework\TestCase;

class TriangleTest extends TestCase
{
    /** @test */
    public function calculate_perimeter(): void{
        $triangle = new Triangle(2, 4);
        $actual = $triangle->get_perimeter();
        $this->assertEquals(6, $actual);
    }

    /** @test */
    public function calculate_area(): void{
        $triangle = new Triangle(2, 4);
        $actual = $triangle->get_area();
        $this->assertEquals(4, $actual);
    }
}