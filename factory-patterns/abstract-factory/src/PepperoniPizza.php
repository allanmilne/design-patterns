<?php

namespace App;

use App\Ingredients\Base;
use App\Ingredients\Cheese;
use App\Ingredients\Pepperoni;
use App\Ingredients\Sauce;

class PepperoniPizza extends Pizza
{
    private PizzaIngredientsFactory $ingredientsFactory;
    private Base $base;
    private Sauce $sauce;
    private Cheese $cheese;
    private array $veggies;
    private Pepperoni $pepperoni;

    public function __construct(PizzaIngredientsFactory $ingredientsFactory)
    {
        $this->ingredientsFactory = $ingredientsFactory;
    }

    public function prepare(): string
    {
        $this->base = $this->ingredientsFactory->createBase();
        $this->sauce = $this->ingredientsFactory->createSauce();
        $this->cheese = $this->ingredientsFactory->createCheese();
        $this->veggies = $this->ingredientsFactory->createVeggies();
        $this->pepperoni = $this->ingredientsFactory->createPepperoni();

        return $this->displayPreparationProcess();
    }

    private function displayPreparationProcess(): string
    {
        $preparation = <<<EOD
            Preparing the {$this->getName()}
            Kneading the dough...
            Setting the {$this->base}
            Adding {$this->sauce}...
            Adding {$this->cheese}...
            Adding {$this->pepperoni}...
            Adding toppings:
            EOD;

        foreach ($this->veggies as $veggy) {
            $preparation .= PHP_EOL . '- ' . $veggy;
        }

        return $preparation;
    }
}
