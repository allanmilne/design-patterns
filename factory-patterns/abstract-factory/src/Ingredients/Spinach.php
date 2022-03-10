<?php

namespace App\Ingredients;

class Spinach extends Veggies
{
    private string $spinach;

    public function __construct()
    {
        $this->spinach = "Spinach";
    }

    public function __toString(): string
    {
        return $this->spinach;
    }
}
