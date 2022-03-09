<?php

namespace App;

class NYPizzaStore extends PizzaStore
{

    public function createPizza(string $type): Pizza
    {
        $pizza = null;

        if ($type === 'cheese') {
            $pizza = new NYStyleCheesePizza();
        } elseif ($type === 'pepperoni') {
            $pizza = new NYStylePepperoniPizza();
        }
//        elseif ($type === 'clam') {
//            $pizza === new NYStyleClamPizza();
//        } elseif ($type === 'veggie') {
//            $pizza = new NYStyleVeggiePizza();
//        }

        return $pizza;
    }
}
