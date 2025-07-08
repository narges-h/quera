<?php
$n = readline("lenght:");
$string = readline("string:");
$k = readline("repead :");

for ($i = 0; $i < $k; $i++) {
    $str = substr($string, -1) . substr($string, 0, strlen($string) - 1);
    $newStr = "";

    for ($j = 0; $j < strlen($str); $j++) {
        $char = $str[$j];
        if ($char == 'z') {
            $newStr .= 'a';
        } else {
            $newStr .= chr(ord($char) + 1);
        }
    }
    $string = $newStr;

}
echo $string;




