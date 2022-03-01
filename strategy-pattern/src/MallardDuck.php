<?php

namespace App;


class MallardDuck extends Duck
{
    public QuackBehaviour $quackBehaviour;
    public FlyBehaviour $flyBehaviour;

    public function __construct()
    {
        $this->quackBehaviour = new Quack();
        $this->flyBehaviour = new FlyWithWings();
    }

    public function display(): string
    {
        return 'I\'m a real Mallard duck!';
    }
}
