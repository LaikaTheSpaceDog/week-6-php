<?php

require __DIR__ . "/vendor/autoload.php";

// function double ($arr) {
//     return collect($arr)->map(fn($n) => $n * 2)->all();
// }

function double ($arr) {
    $newArr = [];
    foreach ($arr as $val) {
        $newArr[] = $val * 2;
    }
    return $newArr;
}

dump(
    double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
    double([1, 2, 5]), // [2, 4, 10]
);