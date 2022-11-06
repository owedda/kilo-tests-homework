<?php

declare(strict_types=1);

namespace App;

use App\Color\ColorInterface;
use App\Exception\EmailNotFoundException;
use App\Expert\ExpertInterface;
use App\Expert\PlasticWindowExpert;
use App\Window\PlasticWindow;
use App\Window\WindowInterface;
use JetBrains\PhpStorm\Pure;

class PlasticWindowFactory implements FactoryInterface
{
    public function __construct(private ?ColorInterface $color = null)
    {
    }

    public function makeWindow(): WindowInterface
    {
        return new PlasticWindow($this->color);
    }

    #[Pure] public function makeExpert(): ExpertInterface
    {
        return new PlasticWindowExpert();
    }
}
