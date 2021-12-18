<?php

namespace App\Classes;

class Rectangle extends Shape
{

    private float $length;
    private float $width;

    public function __construct(float $length, float $width){
        $this->length = $length;
        $this->width = $width;
        $this->set_area();
        $this->set_perimeter();
    }

    private function set_perimeter(){
        $this->perimeter = 2 * ( $this->length + $this->width );
    }

    private function set_area(){
        $this->area = $this->length * $this->width;
    }

}