<?php

namespace App\Classes;

use App\Interfaces\ParentInterface;

class Shape implements ParentInterface
{
	protected int $perimeter = 0;
    protected int $area = 0;

	public function get_perimeter(): int
    {
		return $this->perimeter;
	}

	public function get_area(): int
    {
		return $this->area;
	}
}