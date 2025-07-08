<?php

$n = readline();
if ($n < 1 || $n > 100) {
    exit("invalid n\n");
}
$phones = [];

for ($x = 1; $x <= $n; $x++) {
    $num = readline();

    if ((strlen($num) == 11) && (substr($num, 0, 2) == '09') && is_numeric($num)) {
        $num2 = substr($num, 1, 10);
        $phones[] = "+98" . $num2;
    } elseif ((strlen($num) == 12) && (substr($num, 0, 3) == '989') && is_numeric($num)) {
        $num3 = substr($num, 2, 11);
        $phones[] = "+98" . $num3;
    } elseif ((strlen($num) == 13) && (substr($num, 0, 4) == '+989') && is_numeric(substr($num, 1)) ){
        $phones[] = $num;
    } else {
        $phones[] = "invalid";
    }
}

foreach ($phones as $phone) {
    echo $phone . "\n";
}









// print_r($phones);

// echo $n."\n";
// foreach ($phons as $i => $phone) {
//     echo "$phone\n";
// }











// if (strlen($x) != 11) {
//     print("invalid");
// }
