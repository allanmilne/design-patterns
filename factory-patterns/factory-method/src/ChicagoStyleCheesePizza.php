<?php

namespace App;

class ChicagoStyleCheesePizza extends Pizza
{
    private string $name;
    private string $sauce;
    private array $toppings;
    private string $base;

    public function __construct()
    {
        $this->name = "Chicago Style Pepperoni Pizza";
        $this->base = "Extra Thick Crust Base";
        $this->sauce = "Plum Tomato sauce";
        $this->toppings = ["Shredded Mozzarella Cheese"];
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

    public function cut(): string
    {
        return "Cutting the pizza into square slices";
    }
}
