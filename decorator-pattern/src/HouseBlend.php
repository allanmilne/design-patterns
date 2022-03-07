<?php

declare(strict_types=1);

namespace App;

class HouseBlend extends Beverage
{
    private string $description;
    private Size $size;

    public function __construct(Size $size)
    {
        $this->description = "House Blend";
        $this->size = $size;
    }

    public function cost(): float
    {
        return match ($this->getSize()) {
            Size::TALL->value => 0.89,
            Size::GRANDE->value => 1.09,
            Size::VENTI->value => 1.29,
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
