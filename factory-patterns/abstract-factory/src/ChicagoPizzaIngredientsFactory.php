<?php

namespace App;

use App\Ingredients\Base;
use App\Ingredients\BlackOlives;
use App\Ingredients\Cheese;
use App\Ingredients\EggPlant;
use App\Ingredients\MozzarellaCheese;
use App\Ingredients\Pepperoni;
use App\Ingredients\PlumTomatoSauce;
use App\Ingredients\Sauce;
use App\Ingredients\SlicedPepperoni;
use App\Ingredients\Spinach;
use App\Ingredients\ThickCrustBase;

class ChicagoPizzaIngredientsFactory implements PizzaIngredientsFactory
{
    public function createBase(): Base
    {
        return new ThickCrustBase();
    }

    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }

    public function createVeggies(): array
    {
        return [
            new BlackOlives(),
            new Spinach(),
            new EggPlant(),
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }
}
