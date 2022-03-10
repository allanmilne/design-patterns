<?php

namespace App\Ingredients;

class EggPlant extends Veggies
{
    private string $eggPlant;

    public function __construct()
    {
        $this->eggPlant = "Egg Plant";
    }

    public function __toString(): string
    {
        return $this->eggPlant;
    }
}
