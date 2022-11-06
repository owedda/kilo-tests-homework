<?php

declare(strict_types=1);

namespace App;

use App\Expert\ExpertInterface;
use App\Window\WindowInterface;

interface FactoryInterface
{
    public function makeWindow(): WindowInterface;

    public function makeExpert(): ExpertInterface;
}
