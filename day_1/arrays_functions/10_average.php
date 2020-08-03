<?php

require __DIR__ . "/vendor/autoload.php";

// function average ($arr) {
//     $sum = 0;
//     $count = count($arr);
//     foreach ($arr as $val) {
//         $sum += $val;
//     }
//         return $sum / $count;
// }

function average ($arr) {
    $count = count($arr);
    return collect($arr)->reduce(fn($acc, $val) => $acc + $val, 0) / $count;
}

dump(
    average([2, 3, 4, 5, 6]), // 4
    average([2, 3]), // 2.5
    average([10, 30]), // 20
    average([-4, -8, -9]), // -7
);