<?php

require __DIR__ . "/vendor/autoload.php";

for ($i = 3; $i < 50; $i += 1) {
    if (($i % 3 === 0) && ($i % 2 === 0)) {
        dump($i);
    }
}
