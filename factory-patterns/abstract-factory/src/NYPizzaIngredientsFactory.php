<?php

namespace App;

use App\Ingredients\Base;
use App\Ingredients\Cheese;
use App\Ingredients\Garlic;
use App\Ingredients\MarinaraSauce;
use App\Ingredients\Onion;
use App\Ingredients\Pepperoni;
use App\Ingredients\RedPepper;
use App\Ingredients\ReggianoCheese;
use App\Ingredients\Sauce;
use App\Ingredients\SlicedPepperoni;
use App\Ingredients\ThinCrustBase;

class NYPizzaIngredientsFactory implements PizzaIngredientsFactory
{
    public function createBase(): Base
    {
        return new ThinCrustBase();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [
            new Garlic(),
            new Onion(),
            new RedPepper(),
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }
}
