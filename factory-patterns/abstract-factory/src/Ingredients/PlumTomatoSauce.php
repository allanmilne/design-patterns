<?php

namespace App\Ingredients;

class PlumTomatoSauce extends Sauce
{
    private string $sauce;

    public function __construct()
    {
        $this->sauce = "Plum Tomato Sauce";
    }

    public function __toString(): string
    {
        return $this->sauce;
    }
}
