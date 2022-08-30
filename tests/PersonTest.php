<?php

require_once realpath(__DIR__."/../Person.php");

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase 
{
    /**
    * @dataProvider namesProvider
    */
    public function testCreate($name, $new_name) 
    {
        $this->person = new Person($name);
        $this->assertSame($this->person->GetName(), $name);
        $this->assertSame($this->person->greeting(), "Hello, I'm {$name}!");
        $this->assertSame($this->person->setName($new_name), null);
        $this->assertSame($this->person->GetName(), $new_name);
    }

    public function namesProvider()
    {
        return [
            "Case 1" => ["John", "Bill"],
            "Case 2" => ["Mark", "Arthur"],
            "Case 3" => ["Alan", "Thomas"],
            "Case 4" => ["Dijkstra", "Oscar"]
        ];
    }
}



?>