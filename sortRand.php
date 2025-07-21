<?php


$array = [];
while (true){
    $x = readline();
    if($x == ""){
        break;
    }
    else{
        array_push($array, $x);

    }
}
for ($j = 0; $j < count($array); $j++) {
    for ($i = 0; $i < count($array) - 1; $i++) {
        if ($array[$i] > $array[$i + 1]) {
            $temp = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $temp;
        }
    }
}
print_r($array);
