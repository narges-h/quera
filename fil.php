<?php

$input1 = readline();
$input = explode(" ",$input1);

$x = $input[0];
$y = $input[1];

for ($i = 2; $i <= 7; $i++) {
    if (!($x == $i && $y == $i)) {
        echo "1\n";
        echo "$i $i\n";
        break;
    }
}
?>
