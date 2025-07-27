<?php
$n = (int)readline("Enter a number: ");
$array = [];
for ($i = 0; $i < $n; $i++) {
    $row = [];
    for ($j = 0; $j < $n; $j++) {
        $input = readline();
        $row[] = $input;
    }
    $array[] = $row;

}

//echo $array[0][0];
//echo $array[0][1];
//echo $array[0][2];

//echo $array[1][2];
//echo $array[2][2];

//echo $array[2][1];
//echo $array[2][0];

//echo $array[1][0];
for ($i = 0; $i <= $n-1 ; $i++) {
    echo $array[0][$i];
}
for ($i = 1; $i <= $n-1; $i++) {
    echo $array[$i][$n-1];
}
for ($i = $n-2; $i >= 0; $i--) {
    echo $array[$n-1][$i];
}
for ($i = $n-2; $i > 0; $i--) {
    echo $array[$i][0];
}


