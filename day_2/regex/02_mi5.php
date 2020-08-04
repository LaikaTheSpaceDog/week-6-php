<!-- Create a function, mi5, that returns true if the given string is 00 followed by a digit. Make sure it returns a boolean value: -->

<?php

require __DIR__ . "/vendor/autoload.php";

function mi5 ($str) {
    return preg_match("/^00[0-9]$/", $str) === 1;
}
dump(mi5("007")); // true
dump(mi5("oo8")); // false
dump(mi5("003")); // true