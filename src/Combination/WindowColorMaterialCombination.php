<?php

declare(strict_types=1);

namespace App\Combination;

use App\Color\ColorInterface;
use App\FactoryInterface;

class WindowColorMaterialCombination
{
    public function __construct(private FactoryInterface $factory)
    {
    }

    public function getFullName(): string
    {
        return $this->factory->makeWindow();
    }
}