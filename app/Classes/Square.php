<?php

namespace App\Classes;

class Square extends Shape
{

    private float $side;

    public function __construct(float $side){
        $this->side = $side;
        $this->set_area();
        $this->set_perimeter();
    }

    public function set_perimeter(){
        $this->perimeter = 4 * $this->side;
    }

    public function set_area(){
        $this->area = $this->side * $this->side;
    }

}