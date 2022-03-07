<?php

declare(strict_types=1);

use App\Espresso;
use App\HouseBlend;
use App\Milk;
use App\Mocha;
use App\Size;
use App\Whip;

require 'vendor/autoload.php';

$beverage = new Espresso(Size::GRANDE);
echo $beverage->getDescription() . " £" . $beverage->cost() . PHP_EOL;

$beverage = new Milk($beverage);
echo $beverage->getDescription() . " £" . $beverage->cost() . PHP_EOL;

$beverage2 = new HouseBlend(Size::GRANDE);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);

echo $beverage2->getDescription() . " £" . $beverage2->cost() . PHP_EOL;
