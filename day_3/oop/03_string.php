<?php

require __DIR__ . "/vendor/autoload.php";

class StringyRedux
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function lower()
    {
        $this->string = strtolower($this->string);
        return $this;
    }

    public function upper()
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function append($appended)
    {
        $this->string .= $appended;
        return $this;
    }

    public function repeat($num)
    {
        $rep = "";
        
        for ($i = 0; $i < $num; $i += 1){
            $rep .= $this->string;
        }
        $this->string = $rep;
        return $this;
    }

    public function get()
    {
        return $this->string;
    }
}

$string1 = new StringyRedux("Oop");
dump($string1->lower()->repeat(2)->get()); // "oopoop"

$string2 = new StringyRedux("Spoon");
dump($string2->repeat(2)->upper()->append("!")->get()); // "SPOONSPOON!"

$string3 = new StringyRedux("Na");
dump($string3->repeat(2)->append(" ")->repeat(8)->append(" ")->append("Batman!")->get()); // "NaNa NaNa NaNa NaNa NaNa NaNa NaNa NaNa  Batman!"