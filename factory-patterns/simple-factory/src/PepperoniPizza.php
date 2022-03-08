<?php

declare(strict_types=1);

namespace App;

class PepperoniPizza extends Pizza
{
    private string $name;

    public function __construct()
    {
        $this->name = "Pepperoni Pizza";
    }

    public function getName(): string
    {
        return $this->name;
    }
}
