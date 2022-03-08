<?php

declare(strict_types=1);

namespace App;

abstract class Pizza
{
    public function prepare(Pizza $pizza): string
    {
        return 'Preparing the ' . $pizza->getName();
    }

    public function bake(Pizza $pizza): string
    {
        return 'Baking the ' . $pizza->getName();
    }

    public function cut(Pizza $pizza): string
    {
        return 'Cutting the ' . $pizza->getName();
    }

    public function box(Pizza $pizza): string
    {
        return 'Boxing the ' . $pizza->getName();
    }
}
