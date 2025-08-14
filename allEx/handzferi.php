<?php

$a = readline();
$b = readline();

if($a[0] == $b[2]){
    echo "YES";
}
elseif($a[2] == $b[0]){
    echo "YES";
}
elseif($a[0] == $a[2]){
    echo "YES";
}
elseif($b[0] == $b[2]){
    echo "YES";
}
else{
    echo "NO";
}

