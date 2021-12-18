<?php

namespace App\Classes;

class Triangle extends Shape
{

    private float $side;
    private float $height;

    public function __construct(float $side, float $height){
        $this->side = $side;
        $this->height = $height;
        $this->set_area();
        $this->set_perimeter();
    }

    public function set_perimeter(){
        $this->perimeter = 3 * $this->side;
    }

    public function set_area(){
        $this->area = 0.5 * $this->side * $this->height;
    }

}