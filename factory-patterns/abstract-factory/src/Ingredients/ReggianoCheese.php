<?php

namespace App\Ingredients;

class ReggianoCheese extends Cheese
{
    private string $cheese;

    public function __construct()
    {
        $this->cheese = "Reggiano Cheese";
    }

    public function __toString(): string
    {
        return $this->cheese;
    }
}
