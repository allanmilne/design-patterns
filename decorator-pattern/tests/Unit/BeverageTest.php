<?php

declare(strict_types=1);

namespace App;

use PHPUnit\Framework\TestCase;

final class BeverageTest extends TestCase
{
    /** @test */
    public function it_can_get_the_concrete_cost(): void
    {
        // concrete Beverage
        $espresso = new Espresso(Size::VENTI);
        // concrete Beverage with concrete Condiment
        $espressoWithMilk = new Milk($espresso);

        // calculate total cost of beverage and condiment
        $this->stub->method('cost')
            ->willReturn(2.59);

        self::assertEquals($this->stub->cost(), $espressoWithMilk->cost());
    }

    /** @test */
    public function it_can_get_the_description(): void
    {
        self::assertInstanceOf(Beverage::class, $this->stub);
        self::assertEquals('Unknown beverage', $this->stub->getDescription());
    }

    /** @test */
    public function it_can_get_the_size(): void
    {
        self::assertInstanceOf(Beverage::class, $this->stub);
        self::assertEquals('Tall', $this->stub->getSize());
    }

    /** @test */
    public function it_can_set_the_size(): void
    {
        $this->stub->setSize(Size::GRANDE);

        self::assertInstanceOf(Beverage::class, $this->stub);
        self::assertEquals('Grande', $this->stub->getSize());
    }

    protected function setUp(): void
    {
        $this->stub = $this->getMockForAbstractClass(Beverage::class);
    }
}
