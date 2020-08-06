<?php

namespace App\Stuff\Things;

class Potato
{
    private $count = 0;

    public function water() : Potato
    {
        $this->count += 1;
        return $this;
    }

    public function hasGrown() : bool
    {
        return $this->count >= 5;
    }

}