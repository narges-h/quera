<?php
$t = readline("enter set:\n");
$datas = [];

for ($i = 1; $i <= (int)$t; $i++) {
    $score = readline("score:\n");
    $str = readline("str:");
    $datas[] = $str;
}


foreach ($datas as $data) {
    $string = str_split($data);
    $tedad_c = 0;
    $tedad_q = 0;

    for ($i = 0; $i < count($string); $i++) {
        if ($string[$i] == "C") {
            $tedad_c++;
        } elseif ($string[$i] == "Q") {
            $tedad_q++;
        }
    }

    if ($tedad_c > $tedad_q) {
        echo "CodeCup\n";
    } elseif ($tedad_q > $tedad_c) {
        echo "Quera\n";
    }
}
