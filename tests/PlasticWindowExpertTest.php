<?php

namespace Test;

use App\Expert\PlasticWindowExpert;
use PHPUnit\Framework\TestCase;

class PlasticWindowExpertTest extends TestCase
{
    public function testGetExpertReturnsCorrectMessageTrue(): void
    {
        $window = new PlasticWindowExpert();
        $actual = $window->getExpert();
        self::assertEquals("I am plastic window expert. \n", $actual);
    }
}
