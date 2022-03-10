<?php

namespace App\Ingredients;

class ThickCrustBase extends Base
{
    private string $base;

    public function __construct()
    {
        $this->base = "Thick Crust Base";
    }

    public function __toString(): string
    {
        return $this->base;
    }
}
