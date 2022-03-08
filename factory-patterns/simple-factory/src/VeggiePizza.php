<?php

declare(strict_types=1);

namespace App;

class VeggiePizza extends Pizza
{
    private string $name;

    public function __construct()
    {
        $this->name = "Veggie Pizza";
    }

    public function getName(): string
    {
        return $this->name;
    }
}
