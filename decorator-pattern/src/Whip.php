<?php

declare(strict_types=1);

namespace App;

class Whip extends CondimentDecorator
{
    private Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Whip";
    }

    public function cost(): float
    {
        return $this->beverage->cost() + $this->condimentCost();
    }

    public function condimentCost(): float
    {
        return match ($this->beverage->getSize()) {
            Size::TALL->value => 0.15,
            Size::GRANDE->value => 0.20,
            Size::VENTI->value => 0.25,
        };
    }
}
