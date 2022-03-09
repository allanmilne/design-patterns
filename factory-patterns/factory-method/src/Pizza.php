<?php

declare(strict_types=1);

namespace App;

abstract class Pizza
{
    public function prepare(): string
    {
        $preparation = <<<EOD
            Preparing the {$this->getName()}
            Kneading the dough...
            Setting the {$this->getBase()}
            Adding {$this->getSauce()}...
            Adding toppings: 
            EOD;

        foreach ($this->getToppings() as $topping) {
            $preparation .= PHP_EOL . '- ' . $topping;
        }

        return $preparation;
    }

    public function bake(): string
    {
        return 'Baking for 25 minutes at 350';
    }

    public function cut(): string
    {
        return 'Cut the pizza into diagonal slices';
    }

    public function box(): string
    {
        return "Placing pizza in official PizzaStore box";
    }
}
