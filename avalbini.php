<?php

$one1 = readline();
$one = intval($one1);
$two1 = readline();
$two = intval($two1);

$arr = array();

for($i = $one+1;$i < $two;$i++){
    array_push( $arr,$i);
}
$count = count($arr);

function aval($i){
    for($j = 2;$j <$i-1;$j++){
        if($i % $j == 0){
            return false;
        }
    }
    return true;
}
$str = "";
foreach($arr as $i){
    if(aval($i) == true){
        ($str .= $i.",");
    }
}
$len = strlen($str);
echo substr($str, 0 , $len-1);




