<?php

$t = readline("\n");
$t1 = explode(" ", $t);

// تعدادبانک ها
$n = $t1[0];
// تعداد تراکنش
$m = (int)$t1[1];


for ($i = 0; $i < $m; $i++) {
    $tra = readline("\n");
    $bank = explode(" ", $tra);
    $transaction[$bank[0]][] = [$bank[0] , $bank[1], $bank[2]];
    $transaction[$bank[1]][] = [$bank[0] , $bank[1], $bank[2]];

}
print_r($transaction);