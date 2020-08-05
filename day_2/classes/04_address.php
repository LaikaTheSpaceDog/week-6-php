<?php

require __DIR__ . "/vendor/autoload.php";

class Address
{
    private $street;
    private $postcode;
    private $town;

    public function __construct($street, $postcode, $town)
    {
        $this->street = $street;
        $this->postcode = $postcode;
        $this->town = $town;
    }

    public function fullAddress()
    {
        return "{$this->street}, {$this->postcode}, {$this->town}";
        // could also use implode here - more flexible
    }

    public function setStreet($newStreet)
    {
        $this->street = $newStreet;
        return $this;
    }

    public function setPostcode($newPostcode)
    {
        $this->postcode = $newPostcode;
        return $this;
    }

    public function setTown($newTown)
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