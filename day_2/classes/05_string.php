<?php

require __DIR__ . "/vendor/autoload.php";

class Stringy
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function lower()
    {
        return strtolower($this->string);
    }

    public function upper()
    {
        return strtoupper($this->string);
    }

    public function append($appended)
    {
        return "{$this->string}{$appended}";
    }

    public function repeat($num)
    {
        $rep = "";
        
        for ($i = 0; $i < $num; $i += 1){
            $rep .= $this->string;
        }

        return $rep;
    }
}

$string = new Stringy("Na");

// it can lowercase a string
dump($string->lower()); // "na"

// it can uppercase a string
dump($string->upper()); // "NA"

// it can concatenate
dump($string->append("blah")); // "Nablah"

// it can repeat a string
dump($string->repeat(5)); // "NaNaNaNaNa"