<?php
$str = readline();
$tool = strlen($str);
echo $str."\n";
for($i = 1;$i < $tool;$i++){
    echo str_repeat($str[$i],$i).substr($str,$i,$tool)."\n";
}
