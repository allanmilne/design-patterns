<?php

declare(strict_types=1);

namespace App;

class ForecastDisplay implements Observer, DisplayElement
{
    private int $id;
    private float $currentPressure = 0;
    private float $lastPressure;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData, $id)
    {
        $this->id = $id;
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;
    }

    public function display(): string
    {
        $forecast = "Forecast: ";

        if ($this->currentPressure > $this->lastPressure) {
            $forecast .= "Improving weather on the way!";
        } elseif ($this->currentPressure === $this->lastPressure) {
            $forecast .= "More of the same";
        } elseif ($this->currentPressure < $this->lastPressure) {
            $forecast .= "Watch out for cooler, rainy weather!";
        }

        return $forecast;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
