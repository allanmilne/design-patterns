<?php

namespace App;

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        $pizza = null;

        if ($type === 'cheese') {
            $pizza = new ChicagoStyleCheesePizza();
        } elseif ($type === 'pepperoni') {
            $pizza = new ChicagoStylePepperoniPizza();
        }
//        elseif ($type === 'clam') {
//            $pizza === new ChicagoStyleClamPizza();
//        } elseif ($type === 'veggie') {
//            $pizza = new ChicagoStyleVeggiePizza();
//        }

        return $pizza;
    }
}
