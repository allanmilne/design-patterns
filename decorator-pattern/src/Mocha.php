<?php

declare(strict_types=1);

namespace App;

class Mocha extends CondimentDecorator
{
    private Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Mocha";
    }

    public function cost(): float
    {
        return $this->beverage->cost() + $this->condimentCost();
    }

    public function condimentCost(): float
    {
        return match ($this->beverage->getSize()) {
            Size::TALL->value => 0.20,
            Size::GRANDE->value => 0.25,
            Size::VENTI->value => 0.30,
        };
    }
}
