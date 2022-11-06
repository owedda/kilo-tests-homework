<?php

declare(strict_types=1);

namespace App\Window;

use App\Color\ColorInterface;

class PlasticWindow implements WindowInterface
{
    public function __construct(private ?ColorInterface $color = null)
    {
    }

    public function getWindow(): string
    {
        if ($this->color === null) {
            return "I am a plastic  window. ";
        }

        return "I am a plastic {$this->color} color window.";
    }


    public function __toString(): string
    {
        return $this->getWindow();
    }
}
