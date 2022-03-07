<?php

declare(strict_types=1);

namespace App;

use PHPUnit\Framework\TestCase;

final class EspressoTest extends TestCase
{
    /** @test */
    public function it_can_decorate_the_beverage_class(): void
    {
        $espresso = new Espresso(Size::VENTI);
        self::assertInstanceOf(Beverage::class, $espresso);
        self::assertEquals(Size::VENTI->value, $espresso->getSize());
        self::assertEquals(2.39, $espresso->cost());
    }

    /** @test */
    public function it_can_get_the_correct_cost_of_beverage_based_on_size(): void
    {
        $tallEspresso = new Espresso(Size::TALL);
        self::assertEquals(1.99, $tallEspresso->cost());

        $grandeEspresso = new Espresso(Size::GRANDE);
        self::assertEquals(2.19, $grandeEspresso->cost());

        $ventiEspresso = new Espresso(Size::VENTI);
        self::assertEquals(2.39, $ventiEspresso->cost());
    }
}
