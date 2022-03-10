<?php

namespace App;

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        $pizza = null;

        /**
         * The Chicago Store is composed with a ChicagoPizzaIngredientsFactory
         * This will be used to produce ingredients for all Chicago-style pizzas
         */
        $ingredientsFactory = new ChicagoPizzaIngredientsFactory();

        if ($type === 'cheese') { // for each type of Pizza, we instantiate a new Pizza and give it the factory it needs to get its ingredients
            $pizza = new CheesePizza(
                $ingredientsFactory // We pass each pizza the factory that should be used to produce its ingredients
            );
            $pizza->setName('Chicago Style Cheese Pizza');
        } elseif ($type === 'pepperoni') {
            $pizza = new PepperoniPizza(
                $ingredientsFactory
            );
            $pizza->setName('Chicago Style Pepperoni Pizza');
        } // we can add more Chicago style pizzas here

        return $pizza;
    }
}
