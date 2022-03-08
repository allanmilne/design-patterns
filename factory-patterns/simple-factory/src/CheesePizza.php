<?php

declare(strict_types=1);

namespace App;

class CheesePizza extends Pizza
{
    private string $name;

    public function __construct()
    {
        $this->name = "Cheese Pizza";
    }

    public function getName(): string
    {
        return $this->name;
    }
}
