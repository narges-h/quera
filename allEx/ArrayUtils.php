<?php

//class ArrayUtils
//{
//    public function sort($number)
//    {
//        $array = explode(' ', $number);
//        $newArray = [];
//        $odds = [];
//        $evens = [];
//
//        for ($i = 0; $i < count($array); $i++) {
//            if ($array[$i] % 2 != 0) {
//                $odds[] = $array[$i];
//            } else {
//                $evens[] = $array[$i];
//            }
//        }
//
////        اگر تعداد اعداد فرد ۶ تا باشه و تعداد اعداد زوج ۹ تا، max می‌شه ۹.
//        $max = max(count($odds), count($evens));
//        for ($i = 0; $i < $max; $i++) {
//            if (isset($odds[$i])) {
//                $newArray[] = $odds[$i];
//            }
//            if (isset($evens[$i])) {
//                $newArray[] = $evens[$i];
//            }
//        }
//
//        return $newArray;
//
//    }
//
//}


function arrayRemove($array, $item)
{
    $index = array_search($item, $array);
    unset($array[$index]);
    return $array;
}

function isEven($number)
{
    return $number % 2 == 0;
}

$line = readline("enter values:");
$input = explode(" ", $line);

//turn values to number
$values = array_map('intval', $input);

$selectedNumber = min($values);
$isEven = isEven($selectedNumber);

$result = [$selectedNumber];
$values = arrayRemove($values, $selectedNumber);

print($selectedNumber);
while (true) {
    $item = min($values);
    if ($item > $selectedNumber && isEven($item) != $isEven && !in_array($item, $result)) {
        $selectedNumber = $item;
        array_push($result, $selectedNumber);
        $isEven = isEven($selectedNumber);

        print($selectedNumber);
    }

    $values = arrayRemove($values, $item);

    if (count($values) == 0) {
        return;
    }
}

print_r($selectedNumber);