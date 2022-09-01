<?php

require_once realpath(__DIR__."/../Person.php");

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase 
{
    // /**
    // * @dataProvider namesProvider
    // */
    // public function testCreate($name, $new_name) 
    // {
    //     $this->person = new Person($name);
    //     $this->assertSame($this->person->GetName(), $name);
    //     $this->assertSame($this->person->greeting(), "Hello, I'm {$name}!");
    //     $this->assertSame($this->person->setName($new_name), null);
    //     $this->assertSame($this->person->GetName(), $new_name);
    // }

    public function testCreate() 
    {
        $name = "John";
        $person = new Person($name);
        $this->assertSame($person->GetName(), $name);
        return $person;
    }

    /**
    * @dataProvider namesProvider
    * @depends testCreate
    */
    public function testGreeting($name, $person) 
    {
        $this->assertSame($person->greeting(), "Hello, I'm {$person->GetName()}!");
    }

    /**
    * @dataProvider namesProvider
    * @depends testCreate
    */
    public function testSetName($name, $person )
    {
        $this->assertSame($person->setName($name), null);
        $this->assertSame($person->GetName(), $name);
    }


    public function namesProvider()
    {
        return [
            "Case 1" => ["John"],
            "Case 2" => ["Mark"],
            "Case 3" => ["Alan"],
            "Case 4" => ["Dijkstra"]
        ];
    }
}



?>