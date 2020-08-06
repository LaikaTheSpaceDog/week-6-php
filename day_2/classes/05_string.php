<?php

require __DIR__ . "/vendor/autoload.php";

class Stringy
{
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function lower() : string
    {
        return strtolower($this->string);
    }

    public function upper() : string
    {
        return strtoupper($this->string);
    }

    public function append(string $appended) : string
    {
        return "{$this->string}{$appended}";
    }

    public function repeat(int $num) : string
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