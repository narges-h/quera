<?php
$num = readline();
$num1 = intval($num);
$count = 0;
for($i = 0;$i <4 ;$i++){
    $count++;
    echo "########.......########\n";
    if($count <= $num1){
        echo "#ghorfe".$count++.".......";
        if($count <= $num1){
            echo "ghorfe".$count."#\n";
        }
        else{
            echo ".......#\n";
        }
    }
    else{
        echo "#.....................#\n";
    }
}
echo "#######################";


