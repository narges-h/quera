<?php

require_once 'StringUtils.php';
require_once 'ArrayUtils.php';


$number = readline();

$stringUtils = new StringUtils();
$result1 = $stringUtils->commaAdder($number);
$result2 = $stringUtils->cammaRemove($number);


$ArrayUtils = new ArrayUtils();
$result3 = $ArrayUtils->sort($number);
print_r($result3);