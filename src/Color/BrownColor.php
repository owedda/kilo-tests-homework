<?php

declare(strict_types=1);

namespace App\Color;

class BrownColor implements ColorInterface
{
    public function __toString(): string
    {
        return "brown";
    }
}
