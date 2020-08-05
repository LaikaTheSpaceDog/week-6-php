<?php

namespace App\Stuff\Things;

class Potato
{
    private $count = 0;

    public function water()
    {
        $this->count += 1;
        return $this;
    }

    public function hasGrown()
    {
        return $this->count >= 5;
    }

}