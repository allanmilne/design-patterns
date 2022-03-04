<?php

declare(strict_types=1);

namespace App;

class StatisticsDisplay implements Observer, DisplayElement
{
    private int $id;
    private float $maxTemp = 0;
    private float $minTemp = 200;
    private float $tempSum = 0;
    private int $numReadings = 0;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData, $id)
    {
        $this->id = $id;
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->setStatistics($temp);
    }

    private function setStatistics(float $temp): void
    {
        $this->tempSum += $temp;
        $this->numReadings++;

        $this->setMaxTemp($temp);
        $this->setMinTemp($temp);
    }

    private function setMaxTemp(float $temp): void
    {
        if ($temp > $this->maxTemp) {
            $this->maxTemp = $temp;
        }
    }

    private function setMinTemp(float $temp): void
    {
        if ($temp < $this->minTemp) {
            $this->minTemp = $temp;
        }
    }

    public function display(): string
    {
        return "Avg/Max/Min temperature = " . ($this->tempSum / $this->numReadings) . "/" . $this->maxTemp . "/" . $this->minTemp;
    }

    public function getCurrentTemperature(): void
    {
        $temp = $this->weatherData->getTemperature();

        $this->setStatistics($temp);
    }

    public function getId(): int
    {
        return $this->id;
    }
}
