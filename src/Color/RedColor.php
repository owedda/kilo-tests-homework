<?php

declare(strict_types=1);

namespace App\Color;

class RedColor implements ColorInterface
{
    public function __toString(): string
    {
        return "red";
    }
}
