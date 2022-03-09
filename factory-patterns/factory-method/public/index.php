<?php

declare(strict_types=1);

use App\ChicagoPizzaStore;
use App\NYPizzaStore;

require 'vendor/autoload.php';

$dominoesNY = new NYPizzaStore();
$dominoesChicago = new ChicagoPizzaStore();

$dominoesNY->orderPizza('pepperoni');
echo PHP_EOL;
echo PHP_EOL;
$dominoesChicago->orderPizza('pepperoni');
