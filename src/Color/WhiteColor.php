<?php

declare(strict_types=1);

namespace App\Color;

class WhiteColor implements ColorInterface
{
    public function __toString(): string
    {
        return "white";
    }
}
