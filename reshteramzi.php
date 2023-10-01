<?php
$tool = readline();
$tool1 = intval($tool);
$kdafe = readline();
$kdafe1 = intval($kdafe);
$str = readline();
for($i = 0;$i <= $kdafe1 ;$i++){
    $str = $str[$tool1-1].substr($str,0,$tool1-1);
}
echo $str;



