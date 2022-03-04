<?php

declare(strict_types=1);

namespace App;

use PHPUnit\Framework\TestCase;

class CurrentConditionsDisplayTest extends TestCase
{
    /** @test */
    public function it_can_be_updated_when_the_subjects_state_changes(): void
    {
        self::assertEquals(80, $this->currentConditionsDisplay->getTemperature());
        self::assertEquals(65, $this->currentConditionsDisplay->getHumidity());

        $this->weatherData->setMeasurements(62, 40, 30.4);

        self::assertEquals(62, $this->currentConditionsDisplay->getTemperature());
        self::assertEquals(40, $this->currentConditionsDisplay->getHumidity());
    }

    /** @test */
    public function it_can_pull_the_current_temperature_from_the_subscriber(): void
    {
        self::assertEquals(80, $this->currentConditionsDisplay->getCurrentTemperature());
    }

    protected function setUp(): void
    {
        $this->weatherData = new WeatherData();
        $this->currentConditionsDisplay = new CurrentConditionsDisplay($this->weatherData, 666);

        $this->weatherData->setMeasurements(80, 65, 30.4);
    }
}
