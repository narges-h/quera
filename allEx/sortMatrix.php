<?php

$n = readline();
$matrix = [];
for ($i = 0; $i < $n; $i++) {
    $row = [];
    for ($j = 0; $j < $n; $j++) {
        $input = readline();
        $row[] = $input;
    }
    $matrix[] = $row;
}

foreach ($matrix as $row) {
    foreach ($row as $val) {
        echo $val . " ";
    }
    echo "\n";
}


$flat = [];
foreach ($matrix as $row) {
    foreach ($row as $item) {
        $flat[] = $item;
    }
}

for ($k = 0; $k < count($flat); $k++) {
    for($s = 0; $s < count($flat)-1 ; $s++){
        if($flat[$s] > $flat[$s+1]){
            $temp = $flat[$s];
            $flat[$s] = $flat[$s+1];
            $flat[$s+1] = $temp;
        }
    }
}

$sortedMatrix = [];
$index = 0;

for ($i = 0; $i < $n; $i++) {
    $row = [];
    for ($j = 0; $j < $n; $j++) {
        $row[] = $flat[$index];
        $index++;
    }
    $sortedMatrix[] = $row;
}

foreach ($sortedMatrix as $row) {
    foreach ($row as $val) {
        echo $val . " ";
    }
    echo "\n";
}

