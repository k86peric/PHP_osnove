<?php
namespace App\Test\Math\Geometry;

use App\Math\Geometry\Circle;
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    public function testDrawReturnCircleCharacter()
    {
        $circle = new Circle(10);

        $this->assertSame('○', $circle->draw());
    }
    /**
     * @dataProvider getRadiusWithExpectedExtent
     */

    public function testGetExtentReturnExpectedResult(int $radius, float $expectedExtent)
    {
        $circle = new Circle($radius);

        $this->assertSame($expectedExtent, $circle->getExtent());

    }

    public static function getRadiusWithExpectedExtent()
    {
        return [
            [10, 2 * 3.14 * 10],
            [100, 2 * 3.14 * 10],
            [5, 2 * 3.14 * 5],
        ];
    }
}