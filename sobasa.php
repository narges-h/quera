<?php

$input1 = readline();
$input2 = readline();

$nab = explode(" ",$input1);

// تعداد گل
$n = $nab[0];
// وقت نیمه اول
$a = $nab[1];
// وقت نیمه دوم
$b = $nab[2]; 

$first = 45 + $a ;
$second = 90 + $b;

$times = explode(" ",$input2);
foreach($times as $key => $val){
    if($val <= $first || $val > 45 && $val < $second){
        echo "YES";
    }
    else{
        echo "NO";
    }

}
