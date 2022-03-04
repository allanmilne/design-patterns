<?php

declare(strict_types=1);

namespace App;

class HeatIndexDisplay implements Observer, DisplayElement
{
    private int $id;
    private float $heatIndex = 0;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData, $id)
    {
        $this->id = $id;
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->heatIndex = $this->computeHeatIndex($temp, $humidity);
    }

    private function computeHeatIndex(float $temp, float $humidity): float
    {
        return ((16.923 + (0.185212 * $temp) + (5.37941 * $humidity) - (0.100254 * $temp * $humidity) + (0.00941695 * ($temp * $temp)) + (0.00728898 * ($humidity * $humidity)) + (0.000345372 * ($temp * $temp * $humidity)) - (0.000814971 * ($temp * $humidity * $humidity)) + (0.0000102102 * ($temp * $temp * $humidity * $humidity)) - (0.000038646 * ($temp * $temp * $temp)) + (0.0000291583 * ($humidity * $humidity * $humidity)) + (0.00000142721 * ($temp * $temp * $temp * $humidity)) + (0.000000197483 * ($temp * $humidity * $humidity * $humidity)) - (0.0000000218429 * ($temp * $temp * $temp * $humidity * $humidity)) + 0.000000000843296 * ($temp * $temp * $humidity * $humidity * $humidity)) - (0.0000000000481975 * ($temp * $temp * $temp * $humidity * $humidity * $humidity)));
    }

    public function display(): string
    {
        return "Heat index is " . $this->heatIndex . "f";
    }

    public function getId(): int
    {
        return $this->id;
    }
}
