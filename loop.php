<?php
// $sum = 0;
// $avg = 0;
// $x = readline();
// $x1 = intval($x);
// for($i = 1;$i <= $x1;$i++){
//     $sum += $i;
// }
// $avg = $sum / $x1;
// echo $sum."\n";
// echo $avg;

// for($i = 1;$i <= 5;$i++){
//     echo "\n";
//     for($j = 1;$j <= $i;$j++){
//         echo $j;
//     }
// }

// for($i = 5;$i >= 1;$i--){
//     echo "\n";
//     for($j = $i;$j >= 1;$j--){
//         echo "*";
//     }
// }

// for($i = 1;$i <= 5;$i++){
//     echo "\n";
//     for($j = 1;$j <= $i;$j++){
//         if($j%2==0){
//             echo "0";
//         }
//         else{
//             echo "1";
//         }
//     }
// }

// for($i = 1;$i <= 5;$i++){
//     echo "\n";
//     for($j = 1;$j <= $i*2;$j++){
//         if($j%2 != 0){
//             echo $j;
//         }
//     }
// }

// for($i = 1;$i <= 4;$i++){
//     echo "\n";
//     for($j = 1;$j <= $i;$j++){
//         echo "*";
//     }
// }

// for($i = 1;$i <= 4;$i++){
//     echo "\n";
//     for($j = 3;$j >= $i;$j--){
//         echo " ";
//     }
//     for($k = 1 ;$k <= $i ;$k++){
//         echo "*";
//     }
// }


$x = readline();
$x1 = intval($x);
for($i = 0;$i <= $x1;$i++){
    for($j = $x1;$j >= $i;$j--){
        echo " ";
    }
    for($k = 1 ;$k <= $i*2-1 ;$k++){
        echo "*";
    }
    echo "\n";
}







// $x = readline();
// $x1 = intval($x);
// for($i = 1;$i < $x1; $i++){
//     echo $i*3;
//     echo "\n";
// }

// for($i = 6;$i > 0; $i--){
//     echo $i*3;
//     echo "\n";
// }

// $x = readline();
// $x1 = intval($x);
// for($i = 1;$i <= $x1; $i++){
//     if($i%2==0){
//         echo $i;
//         echo "\n";
//     }
// }





