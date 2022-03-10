<?php

namespace App\Ingredients;

class Garlic extends Veggies
{
    private string $garlic;

    public function __construct()
    {
        $this->garlic = "Garlic";
    }

    public function __toString(): string
    {
        return $this->garlic;
    }
}
