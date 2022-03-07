<?php

declare(strict_types=1);

namespace App;

use PHPUnit\Framework\TestCase;

final class MilkTest extends TestCase
{
    /** @test */
    public function it_can_decorate_the_beverage(): void
    {
        $concreteCondiment = new Milk($this->beverage);

        self::assertEquals('Unknown beverage, Milk', $concreteCondiment->getDescription());
    }

    /** @test */
    public function it_can_get_the_correct_cost_of_condiment_based_on_size(): void
    {
        $this->beverage->setSize(Size::TALL);
        $concreteCondiment = new Milk($this->beverage);

        self::assertEquals(0.10, $concreteCondiment->condimentCost());

        $this->beverage->setSize(Size::GRANDE);
        $concreteCondiment = new Milk($this->beverage);

        self::assertEquals(0.15, $concreteCondiment->condimentCost());

        $this->beverage->setSize(Size::VENTI);
        $concreteCondiment = new Milk($this->beverage);

        self::assertEquals(0.20, $concreteCondiment->condimentCost());
    }

    protected function setUp(): void
    {
        $this->beverage = $this->getMockForAbstractClass(Beverage::class);
    }
}
