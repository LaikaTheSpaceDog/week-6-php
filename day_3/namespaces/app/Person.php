<?php

namespace App;

class Person
{
    private $firstname;
    private $secondname;

    public function __construct(string $firstname, string $secondname)
    {
        $this->firstname = $firstname;
        $this->secondname = $secondname;
    }

    public function fullName() : string
    {
        return "{$this->firstname} {$this->secondname}";
    }

    public function sayHelloTo(Person $person) : string
    {
        return "Hello {$person->fullName()}";
    }
}