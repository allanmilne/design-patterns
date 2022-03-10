<?php

namespace App;

use App\Ingredients\Base;
use App\Ingredients\Cheese;
use App\Ingredients\Pepperoni;
use App\Ingredients\Sauce;

interface PizzaIngredientsFactory
{
    public function createBase(): Base;
    public function createSauce(): Sauce;
    public function createCheese(): Cheese;
    public function createVeggies(): array;
    public function createPepperoni(): Pepperoni;
}
