<?php

declare(strict_types=1);

namespace App;

class ClamPizza extends Pizza
{
    private string $name;

    public function __construct()
    {
        $this->name = "Clam Pizza";
    }

    public function getName(): string
    {
        return $this->name;
    }
}
