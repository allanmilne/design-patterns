<?php

namespace App;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehaviour = new FlyNoWay();
        $this->quackBehaviour = new Quack();
    }

    public function display()
    {
        return 'I\'m a model duck!';
    }
}
