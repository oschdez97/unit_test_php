<?php

class Person
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function greeting(): string
    {
        return "Hello, I'm {$this->name}!";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}