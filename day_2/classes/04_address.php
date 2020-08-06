<?php

require __DIR__ . "/vendor/autoload.php";

class Address
{
    private $street;
    private $postcode;
    private $town;

    public function __construct(string $street, string $postcode, string $town)
    {
        $this->street = $street;
        $this->postcode = $postcode;
        $this->town = $town;
    }

    public function fullAddress() : string
    {
        return "{$this->street}, {$this->postcode}, {$this->town}";
        // could also use implode here - more flexible
    }

    public function setStreet(string $newStreet) : Address
    {
        $this->street = $newStreet;
        return $this;
    }

    public function setPostcode(string $newPostcode) : Address
    {
        $this->postcode = $newPostcode;
        return $this;
    }

    public function setTown(string $newTown) : Address
    {
        $this->town = $newTown;
        return $this;
    }
}

$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

// logs the full address neatly
dump($address->fullAddress()); // "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
$address->setStreet("12 Cantelope Way")
        ->setPostcode("SW5 8RQ")
        ->setTown("Swansea");

// logs the new full address neatly
dump($address->fullAddress()); // "12 Cantelope Way, Swansea, SW5 8RQ"