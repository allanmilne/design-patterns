<?php

namespace App;

use PHPUnit\Framework\TestCase;

class DuckTest extends TestCase
{
    /** @test */
    public function its_behaviour_can_be_changed_at_runtime(): void
    {
        $mallardDuck = new MallardDuck();

        // inherited behaviour
        self::assertInstanceOf(Duck::class, $mallardDuck);
        self::assertEquals("Quack, quack!", $mallardDuck->performQuack());
        self::assertEquals("I'm flying, watch me soar through the sky", $mallardDuck->performFly());

        // dynamically changed the behaviour
        $mallardDuck->setQuackBehaviour(new MuteQuack());
        self::assertEquals("Silence!!", $mallardDuck->performQuack());

        $mallardDuck->setFlyBehaviour(new FlyRocketPowered());
        self::assertEquals("To infinite and beyond! ==>", $mallardDuck->performFly());
    }
}
