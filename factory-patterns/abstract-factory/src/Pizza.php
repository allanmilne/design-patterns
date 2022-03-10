<?php

declare(strict_types=1);

namespace App;

abstract class Pizza
{
    private string $name;

    abstract public function prepare(): string;

    public function bake(): string
    {
        return 'Baking for 25 minutes at 350';
    }

    public function cut(): string
    {
        return 'Cut the pizza into diagonal slices';
    }

    public function box(): string
    {
        return "Placing pizza in official PizzaStore box";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
