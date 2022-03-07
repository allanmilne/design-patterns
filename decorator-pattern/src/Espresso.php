<?php

declare(strict_types=1);

namespace App;

class Espresso extends Beverage
{
    private string $description;
    private Size $size;

    public function __construct(Size $size)
    {
        $this->description = "Espresso";
        $this->size = $size;
    }

    public function cost(): float
    {
        return match ($this->getSize()) {
            Size::TALL->value => 1.99,
            Size::GRANDE->value => 2.19,
            Size::VENTI->value => 2.39,
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
