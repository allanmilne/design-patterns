<?php

namespace App;

use App\Ingredients\Base;
use App\Ingredients\Cheese;
use App\Ingredients\Sauce;

class CheesePizza extends Pizza
{
    private PizzaIngredientsFactory $ingredientsFactory;
    private Base $base;
    private Sauce $sauce;
    private Cheese $cheese;

    public function __construct(PizzaIngredientsFactory $ingredientsFactory)
    {
        $this->ingredientsFactory = $ingredientsFactory;
    }

    public function prepare(): string
    {
        $this->base = $this->ingredientsFactory->createBase();
        $this->sauce = $this->ingredientsFactory->createSauce();
        $this->cheese = $this->ingredientsFactory->createCheese();

        return $this->displayPreparationProcess();
    }

    private function displayPreparationProcess(): string
    {
        return <<<EOD
            Preparing the {$this->getName()}
            Kneading the dough...
            Setting the {$this->base}
            Adding {$this->sauce}...
            Adding {$this->cheese}...
            EOD;
    }
}
