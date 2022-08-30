<?php

use PHPUnit\Framework\TestCase;

class DataTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertSame($expected, $a + $b);
    }

    public function additionProvider()
    {
        return [
            "Case 1" => [0, 0, 0],
            "Case 2" => [0, 1, 1],
            "Case 3" => [1, 0, 1],
            "Case 4" => [1, 1, 3]
        ];
    }
}

?>