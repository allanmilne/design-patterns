<?php

declare(strict_types=1);

namespace App;

abstract class PizzaStore
{
    final public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        echo "You're " . $pizza->getName() . " has been ordered!" . PHP_EOL;
        echo PHP_EOL;
        echo $pizza->prepare() . PHP_EOL;
        echo PHP_EOL;
        echo $pizza->bake() . PHP_EOL;
        echo $pizza->cut() . PHP_EOL;
        echo $pizza->box() . PHP_EOL;

        return $pizza;
    }

    /**
     * All responsibility for instantiating pizzas has been moved to this factory method
     */
    abstract public function createPizza(string $type): Pizza;
}
