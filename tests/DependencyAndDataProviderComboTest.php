<?php

use PHPUnit\Framework\TestCase;

class DependencyAndDataProviderComboTest extends TestCase
{
    public function provider()
    {
        return [
            "Case 1" => ['provider1'], 
            "Case 2" => ['provider1'],
            "Case 3" => ['provider2']
        ];
    }

    public function testProducerFirst()
    {
        $this->assertTrue(true);
        return 'first';
    }

    public function testProducerSecond()
    {
        $this->assertTrue(true);
        return 'second';
    }

    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     * @dataProvider provider
     */
    public function testConsumer()
    {
        $this->assertSame(
            ['provider1', 'first', 'second'],
            func_get_args()
        );
    }
}

?>