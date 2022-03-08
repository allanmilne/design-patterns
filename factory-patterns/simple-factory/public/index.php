<?php

declare(strict_types=1);

use App\PizzaStore;
use App\SimplePizzaFactory;

require 'vendor/autoload.php';

$factory = new SimplePizzaFactory();
$dominoes = new PizzaStore($factory);

$pizza = $dominoes->orderPizza('cheese');
