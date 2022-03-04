<?php

declare(strict_types=1);

namespace App;

class WeatherData implements Subject
{
    private array $observers;
    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function __construct()
    {
        $this->observers = [];
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }

    public function registerObserver(Observer $observer): void
    {
        $this->observers[$observer->getId()] = $observer;
    }

    public function removeObserver(Observer $observer): void
    {
        unset($this->observers[$observer->getId()]);
    }

    public function setMeasurements($temperature, $humidity, $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function getObservers(): array
    {
        return $this->observers;
    }
}
