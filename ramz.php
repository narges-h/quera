<?php
$n = readline();
$k = readline();
$string = readline();

for ($i = 0; $i < $k; $i++) {
    $str = substr($string, -1) . substr($string, 0, - 1);
    $newStr = "";


    $length = strlen($str);

    for ($j = 0; $j < $length; $j++) {
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




