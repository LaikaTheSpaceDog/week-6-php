<!-- Create a function validEmail that takes a string, trims any whitespace at the beginning/end of the string 
(using preg_replace) and then returns if the trimmed string is a valid email: -->

<!-- Hint: you can use ( to group ) parts of a regex and | as or -->

<?php

require __DIR__ . "/vendor/autoload.php";

function validEmail ($str) {
    $newStr = preg_replace("/(^\s+)|(\s+$)/", "", $str);
    $valid = filter_var($newStr, FILTER_VALIDATE_EMAIL);
    return $valid !== false;

}

dump(validEmail(" blahf   ")); // false
dump(validEmail(" blah@f")); // false
dump(validEmail("blah@ fish.horse")); // false
dump(validEmail(" blah@fish.horse")); // true
dump(validEmail("blah@fish.horse ")); // true
dump(validEmail(" blah@fish.horse ")); // true