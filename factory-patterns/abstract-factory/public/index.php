<?php

declare(strict_types=1);

use App\ChicagoPizzaStore;
use App\NYPizzaStore;

require 'vendor/autoload.php';

$nyPizzaStore = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$nyPizzaStore->orderPizza('cheese');
echo PHP_EOL;
echo PHP_EOL;
$chicagoStore->orderPizza('cheese');
echo PHP_EOL;
echo PHP_EOL;
$nyPizzaStore->orderPizza('pepperoni');
echo PHP_EOL;
echo PHP_EOL;
$chicagoStore->orderPizza('pepperoni');
