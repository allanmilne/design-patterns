<?php

declare(strict_types=1);

namespace App;

class PizzaStore
{
    private SimplePizzaFactory $factory;

    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->factory->createPizza($type);

        echo $pizza->prepare($pizza) . PHP_EOL;
        echo $pizza->bake($pizza) . PHP_EOL;
        echo $pizza->cut($pizza) . PHP_EOL;
        echo $pizza->box($pizza) . PHP_EOL;

        return $pizza;
    }
}
