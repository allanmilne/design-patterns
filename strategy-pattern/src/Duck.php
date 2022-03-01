<?php

namespace App;

abstract class Duck
{
    public FlyBehaviour $flyBehaviour;
    public QuackBehaviour $quackBehaviour;

    abstract public function display();

    public function swim(): string
    {
        return 'All ducks float!';
    }

    public function performQuack()
    {
        return $this->quackBehaviour->quack();
    }

    public function performFly()
    {
        return $this->flyBehaviour->fly();
    }

    /**
     * @param FlyBehaviour $flyBehaviour
     */
    public function setFlyBehaviour(FlyBehaviour $flyBehaviour): void
    {
        $this->flyBehaviour = $flyBehaviour;
    }

    /**
     * @param QuackBehaviour $quackBehaviour
     */
    public function setQuackBehaviour(QuackBehaviour $quackBehaviour): void
    {
        $this->quackBehaviour = $quackBehaviour;
    }
}
