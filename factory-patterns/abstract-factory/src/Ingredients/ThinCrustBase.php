<?php

namespace App\Ingredients;

class ThinCrustBase extends Base
{
    private string $base;

    public function __construct()
    {
        $this->base = "Thin Crust Base";
    }

    public function __toString(): string
    {
        return $this->base;
    }
}
