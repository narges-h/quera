<?php


$adad = readline();
$str = explode(" ",$adad);
$loop = intval($str[0]);
$lenght = intval($str[1]);

$tedad1 = readline();
$tadat = intval($tedad1);

$aray = array();
for($i = 1;$i <= $tadat;$i++){
    $car = readline();
    $str = explode(" ",$car);
    $t = intval($str[0]);
    $u = intval($str[1]);

    $rah = tool($loop,$lenght);
    $sorat = sorat($rah,$u,$t);

    array_push($aray,$sorat);
}

$min = min($aray);
$car = array_search($min,$aray);
echo $car + 1;

function tool($x,$y){
    $tool = $x * $y;
    return $tool;
}


function sorat($rah,$u,$t){
    $car = $rah / $u + $t;
    return $car;
}

