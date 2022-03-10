<?php

namespace App\Ingredients;

class MarinaraSauce extends Sauce
{
    private string $sauce;

    public function __construct()
    {
        $this->sauce = "Marinara Sauce";
    }

    public function __toString(): string
    {
        return $this->sauce;
    }
}
