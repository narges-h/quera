<?php

require_once 'string.php';
//use StringUtils;

$number = readline();
$stringUtils = new StringUtils();


$result1 = $stringUtils->commaAdder($number);

$result2 = $stringUtils->cammaRemove($number);
print_r($result2);