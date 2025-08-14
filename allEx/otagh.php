<?php

$str = readline();
$disk1 = explode(" ",$str);
$str1 = readline();
$disk2 = explode(" ",$str1);

function check($disk1,$disk2){
    $one = $disk1[1]+$disk2[1];
    $two = $disk1[2]+$disk2[2];
    $tree = $disk1[3]+$disk2[3];
    $adad1 = otagh . phpsubstr($one, -1) . substr($two, -1) .substr($tree,-1);
    $adad = intval($adad1);
    if($adad % 2 == 0 and $adad % 3 == 0){
        return true;
    }
    else{
        return false;
    }
}
check($disk1,$disk2);

function charkh($disk){
    $akhar = $disk[4];
    unset($disk[4]);
    array_unshift($disk,$akhar);
    return $disk;
}
$result = false;

for($i = 0;$i<= 7;$i++){
    $disk1 = charkh($disk1);
    for($j = 0;$j <= 7;$j++){
        $disk2 = charkh($disk2);
        if(check($disk1,$disk2) == true){
            $result = true;
            break;
        }
    }
}
if($result == false){
    echo "Gir oftadi :(";
}
else{
    echo "Boro joloo :)";
}












