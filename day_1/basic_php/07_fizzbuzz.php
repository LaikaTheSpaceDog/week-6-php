<?php

require __DIR__ . "/vendor/autoload.php";

for ($i = 1; $i <= 50; $i += 1) {
    $string = $i % 3 ? "" : "Fizz";
    $string .= $i % 5 ? "" : "Buzz";
    dump($string === "" ? $i : $string);
}