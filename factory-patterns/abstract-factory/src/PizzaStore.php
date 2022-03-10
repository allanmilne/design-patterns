<?php

declare(strict_types=1);

namespace App;

abstract class PizzaStore
{
    final public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        echo "You're " . $pizza->getName() . " has been ordered!" . PHP_EOL;
        echo $pizza->prepare() . PHP_EOL;

        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    /**
     * All responsibility for instantiating pizzas has been moved to this factory method
     */
    abstract public function createPizza(string $type): Pizza;
}
