<?php

namespace App;

class NYStyleCheesePizza extends Pizza
{
    private string $name;
    private string $sauce;
    private array $toppings;
    private string $base;

    public function __construct()
    {
        $this->name = "New York style Cheese Pizza";
        $this->base = "Thin Crust Base";
        $this->sauce = "Marinara sauce";
        $this->toppings = ['Grated Reggiano Cheese'];
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
