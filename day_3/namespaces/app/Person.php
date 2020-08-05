<?php

namespace App;

class Person
{
    private $firstname;
    private $secondname;

    public function __construct($firstname, $secondname)
    {
        $this->firstname = $firstname;
        $this->secondname = $secondname;
    }

    public function fullName()
    {
        return "{$this->firstname} {$this->secondname}";
    }

    public function sayHelloTo($person)
    {
        return "Hello {$person->fullName()}";
    }
}