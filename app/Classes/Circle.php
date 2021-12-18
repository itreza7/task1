<?php

namespace App\Classes;

class Circle extends Shape
{

    private float $radius;

    public function __construct(float $radius){
        $this->radius = $radius;
        $this->set_area();
        $this->set_perimeter();
    }

    private function set_perimeter(){
        $this->perimeter = 2 * M_PI * $this->radius;
    }

    private function set_area(){
        $this->area = M_PI * $this->radius * $this->radius;
    }

}