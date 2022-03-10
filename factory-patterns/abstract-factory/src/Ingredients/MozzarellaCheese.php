<?php

namespace App\Ingredients;

class MozzarellaCheese extends Cheese
{
    private string $cheese;

    public function __construct()
    {
        $this->cheese = "Mozzarella Cheese";
    }

    public function __toString(): string
    {
        return $this->cheese;
    }
}
