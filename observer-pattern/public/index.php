<?php

use App\CurrentConditionsDisplay;
use App\ForecastDisplay;
use App\HeatIndexDisplay;
use App\StatisticsDisplay;
use App\WeatherData;

require 'vendor/autoload.php';

$weatherData = new WeatherData();
$currentConditionsDisplay = new CurrentConditionsDisplay($weatherData, 1);
$statisticsDisplay = new StatisticsDisplay($weatherData, 2);
$forecastDisplay = new ForecastDisplay($weatherData, 3);
$heatIndexDisplay = new HeatIndexDisplay($weatherData, 4);

// Setting the WeatherData measurements updates all observers
$weatherData->setMeasurements(80, 65, 30.4);
echo $currentConditionsDisplay->display() . PHP_EOL;
echo $statisticsDisplay->display() . PHP_EOL;
echo $forecastDisplay->display() . PHP_EOL;
echo $heatIndexDisplay->display() . PHP_EOL;
echo PHP_EOL;

$weatherData->setMeasurements(82, 70, 29.2);
echo $currentConditionsDisplay->display() . PHP_EOL;
echo $statisticsDisplay->display() . PHP_EOL;
echo $forecastDisplay->display() . PHP_EOL;
echo $heatIndexDisplay->display() . PHP_EOL;
echo PHP_EOL;

$weatherData->setMeasurements(78, 90, 29.2);
echo $currentConditionsDisplay->display() . PHP_EOL;
echo $statisticsDisplay->display() . PHP_EOL;
echo $forecastDisplay->display() . PHP_EOL;
echo $heatIndexDisplay->display() . PHP_EOL;
