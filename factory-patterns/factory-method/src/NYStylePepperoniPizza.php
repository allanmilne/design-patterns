<?php

namespace App;

class NYStylePepperoniPizza extends Pizza
{
    private string $name;
    private string $sauce;
    private array $toppings;
    private string $base;

    public function __construct()
    {
        $this->name = "New York Style Pepperoni Pizza";
        $this->base = "Thin Crust Base";
        $this->sauce = "Marinara Sauce";
        $this->toppings = [
            "Grated Reggiano Cheese",
            "Sliced Pepperoni",
            "Garlic",
            "Onion",
            "Red Pepper"
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getToppings(): array
    {
        return $this->toppings;
    }

    public function getSauce(): string
    {
        return $this->sauce;
    }

    public function getBase(): string
    {
        return $this->base;
    }
}
