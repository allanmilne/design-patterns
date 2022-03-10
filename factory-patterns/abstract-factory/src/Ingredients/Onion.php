<?php

namespace App\Ingredients;

class Onion extends Veggies
{
    private string $onion;

    public function __construct()
    {
        $this->onion = "Onion";
    }

    public function __toString(): string
    {
        return $this->onion;
    }
}
