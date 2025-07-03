<?php

$n = readline();
$phones = [];

for ($x = 1; $x <= $n; $x++) {
    $num = readline();

    if ((strlen($num) == 11) && (substr($num, 0, 2) == '09')) {
        $num2 = substr($num, 1, 10);
        $phones[] = "+98" . $num2;
    } elseif ((strlen($num) == 12) && substr($num, 0, 2) == '98') {
        $num3 = substr($num, 2, 10);
        $phones[] = "+98" . $num3;
    } elseif ((strlen($num) == 13) && substr($num, 0, 3) == '+98') {
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
