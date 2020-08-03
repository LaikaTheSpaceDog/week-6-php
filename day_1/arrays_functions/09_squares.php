<?php

require __DIR__ . "/vendor/autoload.php";

// function squares ($arr) {
//     $newArr = [];
//     foreach ($arr as $val) {
//         $newArr[] = $val * $val;
//     }
//     return $newArr;
// }

function squares ($arr) {
    return collect($arr)->map(fn($n) => $n * $n)->all();
}

dump(
    squares([2, 3, 4]), // [4, 9, 16]
    squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
);