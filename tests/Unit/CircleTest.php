<?php

namespace Tests\Unit;

use App\Classes\Circle;
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    /** @test */
    public function calculate_perimeter(): void{
        $circle = new Circle(4);
        $actual = $circle->get_perimeter();
        $this->assertEquals(25, $actual);
    }

    /** @test */
    public function calculate_area(): void{
        $circle = new Circle(4);
        $actual = $circle->get_area();
        $this->assertEquals(50, $actual);
    }
}