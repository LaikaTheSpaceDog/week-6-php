<?php

require __DIR__ . "/vendor/autoload.php";

$runs = 0;
$total = 0;
$i = 0;

while ($runs <= 117) {
    if (($i % 3 === 0) || ($i % 7 === 0)) {
        $total += $i;
        $runs += 1;
    }
    $i += 1;
}

dump($total);