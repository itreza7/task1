<?php

namespace Tests\Unit;

use App\Classes\Rectangle;
use PHPUnit\Framework\TestCase;

class RectangleTest extends TestCase
{
    /** @test */
    public function calculate_perimeter(): void{
        $rectangle = new Rectangle(2, 4);
        $actual = $rectangle->get_perimeter();
        $this->assertEquals(12, $actual);
    }

    /** @test */
    public function calculate_area(): void{
        $rectangle = new Rectangle(2, 4);
        $actual = $rectangle->get_area();
        $this->assertEquals(8, $actual);
    }
}