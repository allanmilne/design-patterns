<?php

declare(strict_types=1);

namespace App;

interface Observer
{
    public function update(float $temp, float $humidity, float $pressure);
}
