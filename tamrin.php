<?php
// -------------------------------------1
// $x = readline();
// $n = readline();

// echo "*\n";
// for ($k = 1; $k <= $n; $k++) {
//     for ($i = 2; $i <= $x; $i++) {
//         for ($j = 1; $j <= $i; $j++) {
//             echo "*";
//         }
//         echo "\n";
//     }
//     for ($a = $x - 1; $a > 0; $a--) {
//         for ($b = 1; $b <= $a; $b++) {
//             echo "*";
//         }
//         echo "\n";
//     }
// }


// -------------------------------------2


$x = readline();

for ($i = 1; $i <= $x; $i++) {
    // چاپ فاصله‌ها (space)
    for ($j = 1; $j <= $x - $i; $j++) {
        echo " ";
    }

    // چاپ ستاره‌ها
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }

    echo "\n"; // خط جدید
}

