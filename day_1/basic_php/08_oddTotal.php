<?php

require __DIR__ . "/vendor/autoload.php";

$total = 0;

for ($i = 1; $i <= 100; $i += 2) {
    $total += $i;
    dump($total);
}