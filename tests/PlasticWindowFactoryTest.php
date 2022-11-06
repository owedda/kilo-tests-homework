<?php

namespace Test;

use App\Color\BrownColor;
use App\Color\ColorInterface;
use App\Color\RedColor;
use App\Color\WhiteColor;
use App\PlasticWindowFactory;
use Generator;
use PHPUnit\Framework\TestCase;

class PlasticWindowFactoryTest extends TestCase
{
    /**
     * @dataProvider colorProvider
     */
    public function testMakeWindowWithColorReturnsCorrectMessageTrue(
        ColorInterface $color,
        string $expected): void
    {
        $plasticWindowFactory = new PlasticWindowFactory($color);

        $actual = $plasticWindowFactory->makeWindow()->getWindow();
        self::assertEquals($expected, $actual);
    }

    public function colorProvider(): Generator
    {
        yield 'Red color' => [
            'color' => new RedColor(),
            'expected' => 'I am a plastic red color window.'
        ];
        yield 'Brown color' => [
            'color' => new BrownColor(),
            'expected' => 'I am a plastic brown color window.'
        ];
        yield 'White color' => [
            'color' => new WhiteColor(),
            'expected' => 'I am a plastic white color window.'
        ];
    }
}
