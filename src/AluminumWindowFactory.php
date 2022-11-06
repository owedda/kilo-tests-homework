<?php

declare(strict_types=1);

namespace App;

use App\Color\ColorInterface;
use App\Expert\ExpertInterface;
use App\Expert\PlasticWindowExpert;
use JetBrains\PhpStorm\Pure;

class AluminumWindowFactory implements FactoryInterface
{
    public function __construct(private ?ColorInterface $color = null)
    {
    }

    public function makeWindow(): WindowInterface
    {
        return new AluminumWindow($this->color);
    }

    #[Pure] public function makeExpert(): ExpertInterface
    {
        return new AluminumWindowExpert();
    }
}
