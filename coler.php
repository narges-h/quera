<?php

$n1 = readline();
$n = intval($n1);

$arr = array();

for($i = 0;$i < $n;$i++){
    $temp1 = readline();
    $temp = intval($temp1);
    array_push( $arr,$temp);
}

for($i = 0;$i < $n;$i++){
    if($arr[$i] <= 15){
        echo "heater\n";
    }
    else{
        echo "cooler\n";
    }
}







 


