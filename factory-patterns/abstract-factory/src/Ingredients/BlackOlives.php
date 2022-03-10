<?php

namespace App\Ingredients;

class BlackOlives extends Veggies
{
    private string $olives;

    public function __construct()
    {
        $this->olives = "Black Olives";
    }

    public function __toString(): string
    {
        return $this->olives;
    }
}
