<?php

namespace App;

class NYPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        $pizza = null;

        /**
         * The New York Store is composed with a NYPizzaIngredientsFactory
         * This will be used to produce ingredients for all NY-style pizzas
         */
        $ingredientsFactory = new NYPizzaIngredientsFactory();

        if ($type === 'cheese') { // for each type of Pizza, we instantiate a new Pizza and give it the factory it needs to get its ingredients
            $pizza = new CheesePizza(
                $ingredientsFactory // We pass each pizza the factory that should be used to produce its ingredients
            );
            $pizza->setName('New York Style Cheese Pizza');
        } elseif ($type === 'pepperoni') {
            $pizza = new PepperoniPizza(
                $ingredientsFactory
            );
            $pizza->setName('New York Style Pepperoni Pizza');
        } // we can add more New York style pizzas here

        return $pizza;
    }
}
