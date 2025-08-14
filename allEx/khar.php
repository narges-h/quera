<?php

$tedad1 = readline();
$tedad = intval($tedad1);
$javab = "";

for($i = 1;$i<=$tedad;$i++){
    $vrodi = readline();
    $mokhtsat = explode(" ",$vrodi);
    $x = intval($mokhtsat[0]);
    $y = intval($mokhtsat[1]);

    if($x == $y and $x%2 == 0){
        $javab .= $x+$y."\n";
    }
    elseif($x == $y and $x%2 != 0){
        $javab .= $x+$y-1 ."\n";
    }
    elseif($x > $y and $x-$y == 2){
        if($x%2==0){
            $javab .= $x+$y."\n";
        }
        else{
            $javab .= $x+$y-1 ."\n";
        }
    }
    else{
        $javab .= "-1\n";
    }
}
echo trim($javab);

