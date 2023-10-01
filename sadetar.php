<?php
$aray = array();
for($i = 0;$i < 4;$i++){
    $num1 = readline();
    $num = intval($num1);  
    array_push($aray,$num);
}

function sum($aray){
    $sum = 0;
    foreach($aray as $i){
        $sum += $i;
    }
    return $sum;
}
$sum = sum($aray);
echo "Sum : ".number_format($sum,6)."\n";

function avg($sum){
    $avg = $sum/4;
    return $avg;
}
echo "Average : ".number_format(avg($sum),6)."\n";

function pro($aray){
    $pro = 1;
    foreach($aray as $i){
        $pro *= $i;
    }
    return $pro;
}
echo "Product : ".number_format(pro($aray),6)."\n";

echo "MAX : ".number_format(max($aray),6)."\n";

echo "MIN : ".number_format(min($aray),6);





