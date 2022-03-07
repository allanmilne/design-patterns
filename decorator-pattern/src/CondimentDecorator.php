<?php

declare(strict_types=1);

namespace App;

abstract class CondimentDecorator extends Beverage
{
    private Beverage $beverage;

    public function getDescription(): string
    {
        return $this->beverage->getDescription();
    }
}
