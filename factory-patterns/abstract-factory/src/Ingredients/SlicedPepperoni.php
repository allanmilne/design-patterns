<?php

namespace App\Ingredients;

class SlicedPepperoni extends Pepperoni
{
    private string $pepperoni;

    public function __construct()
    {
        $this->pepperoni = "Sliced Pepperoni";
    }

    public function __toString(): string
    {
        return $this->pepperoni;
    }
}
