<?php

$adad = readline();
$str = explode(" ",$adad);
$one = intval($str[0]);
$two = intval($str[1]);
$tree = intval($str[2]);
$four = intval($str[3]);
$five = intval($str[4]);
$six = intval($str[5]);

echo 1-$one." ". 1-$two." ". 2-$tree." ". 2-$four." ". 2-$five." ". 8-$six;