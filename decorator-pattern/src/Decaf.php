<?php

declare(strict_types=1);

namespace App;

class Decaf extends Beverage
{
    private string $description;
    private Size $size;

    public function __construct(Size $size)
    {
        $this->description = "Decaf";
        $this->size = $size;
    }

    public function cost(): float
    {
        return match ($this->getSize()) {
            Size::TALL->value => 1.05,
            Size::GRANDE->value => 1.25,
            Size::VENTI->value => 1.45,
        };
    }

    public function getSize(): string
    {
        return $this->size->value;
    }

    public function getDescription(): string
    {
        return $this->getSize() . " " . $this->description;
    }
}
