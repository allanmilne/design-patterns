<?php

namespace App\Ingredients;

class RedPepper extends Veggies
{
    private string $redPepper;

    public function __construct()
    {
        $this->redPepper = "Red Pepper";
    }

    public function __toString(): string
    {
        return $this->redPepper;
    }
}
