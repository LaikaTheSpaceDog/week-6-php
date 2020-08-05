<?php

require __DIR__ . "/vendor/autoload.php";

class LightSwitch
{
    private $isOn = false;

    public function isOn()
    {
        return $this->isOn;
    }

    public function turnOn()
    {
        $this->isOn = true;
        return $this;
    }

    public function turnOff()
    {
        $this->isOn = false;
        return $this;
    }
}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
dump($lightSwitch->isOn());
dump($lightSwitch->turnOn()
                 ->turnOff()
                 ->isOn()
); // false

// // you can turn it on
// $lightSwitch->turnOn();
// dump($lightSwitch->isOn()); // true

// // you can turn it off
// $lightSwitch->turnOff();
// dump($lightSwitch->isOn()); // false