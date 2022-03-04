<?php

declare(strict_types=1);

namespace App;

use PHPUnit\Framework\TestCase;

final class WeatherDataTest extends TestCase
{
    /** @test */
    public function it_can_register_observers(): void
    {
        $subject = new WeatherData();
        $observer = new CurrentConditionsDisplay($subject, 123);

        self::assertContains($observer, $subject->getObservers());
    }

    /** @test */
    public function it_can_remove_observers(): void
    {
        // given I have a registered observer
        $subject = new WeatherData();
        $currentConditionsObserver = new CurrentConditionsDisplay($subject, 123);
        $StatisticsDisplayObserver = new CurrentConditionsDisplay($subject, 456);

        self::assertContains($currentConditionsObserver, $subject->getObservers());
        self::assertContains($StatisticsDisplayObserver, $subject->getObservers());

        // when I call remove observer
        $subject->removeObserver($currentConditionsObserver);

        // then the observer is no longer observes the subject
        self::assertNotContains($currentConditionsObserver, $subject->getObservers());
    }

    public function it_can_update_observers_when_state_has_changed(): void
    {
        $observer = $this->createMock(CurrentConditionsDisplay::class);

        $observer->expects($this->once())
            ->method('update');

        $subject = new WeatherData();
        $subject->registerObserver($observer);
        $subject->setMeasurements(80.0, 65.0, 30.4);
    }
}
