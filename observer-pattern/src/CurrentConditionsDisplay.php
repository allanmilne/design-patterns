<?php

declare(strict_types=1);

namespace App;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private int $id;
    private float $temperature;
    private float $humidity;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData, $id)
    {
        $this->id = $id;
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function display(): string
    {
        return "Current conditions: " . $this->temperature . "f degrees and " . $this->humidity . "% humidity.";
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
    }

    public function getCurrentTemperature(): float
    {
        return $this->weatherData->getTemperature();
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
