<?php
$num = readline();
$count = 0;
for($i = 0;$i <4 ;$i++){
    $count++;
    echo "########.......########\n";
    if($count <= $num){
        echo "#ghorfe".$count++.".......";
        if($count <= $num){
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


