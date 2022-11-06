<?php

declare(strict_types=1);

namespace App\Color;

interface ColorInterface extends \Stringable
{
    public function __toString(): string;
}
