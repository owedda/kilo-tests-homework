<?php

declare(strict_types=1);

namespace App\Expert;

class PlasticWindowExpert implements ExpertInterface
{
    public function getExpert(): string
    {
        return "I am plastic window expert. \n";
    }

    public function __toString(): string
    {
        return $this->getExpert();
    }
}
