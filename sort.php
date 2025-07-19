<?php

$x = readline();
$array = explode(" ", $x);

//if($array[0] > $array[1]){
//    $temp = $array[0];
//    $array[0] = $array[1];
//    $array[1] = $temp;
//}
//
//print_r($array);
for ($j = 0; $j < count($array); $j++) {
    for($i = 0; $i < count($array)-1 ; $i++){
        if($array[$i] > $array[$i+1]){
            $temp = $array[$i];
            $array[$i] = $array[$i+1];
            $array[$i+1] = $temp;
        }
    }
}

print_r($array);

