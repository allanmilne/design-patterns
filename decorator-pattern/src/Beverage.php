<?php

declare(strict_types=1);

namespace App;

abstract class Beverage
{
    private Size $size = Size::TALL;
    private string $description = "Unknown beverage";

    public function getDescription(): string
    {
        return $this->description;
    }

    abstract public function cost(): float;

    public function getSize(): string
    {
        return $this->size->value;
    }

    public function setSize(Size $size): void
    {
        $this->size = $size;
    }
}
