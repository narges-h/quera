<?php


$tekrar1 = readline();
$tekrar = intval($tekrar1);
$javab = "";
for($i = 1;$i<=$tekrar;$i++){
    $adad = readline();
    $str = (explode(" ",$adad));
    $one = intval($str[0]);
    $two = intval($str[1]);
    $a = sqrt($one);
    $a1 = intval($a)."\n";

    $b = sqrt($two);
    $b1 = intval($b);
 
    $arr = array();

    for($k = $a1+1;$k <= $b1;$k++){
        array_push( $arr,$k);
    } 
    $count = count($arr);
    $javab .= ($count)."\n";
}
echo trim($javab);










