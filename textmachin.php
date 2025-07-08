<?php


$string = readline("string: \n");

while (true) {
    $operation = readline("operation: \n");

    if ($operation === "EXIT") {
        break;
    }
    $str = explode(" ", $operation);
    $opr = $str[0];

    switch ($opr) {
        case "SHIFT-R":
            $string = shiftR($string, (int)$str[1]);
            break;
        case "SHIFT-L":
            $string = shiftL($string, (int)$str[1]);
            break;
        case "EXTEND":
            $string = extend($string, (int)$str[1]);
            break;
        case "SHRINK":
            $string = shrink($string, (int)$str[1]);
            break;
        case "REVERSE":
            $string = reverse($string);
            break;
        case "PUT":
            $string = put($string, (int)$str[1], $str[2]);
            break;
        case "PRINT":
            echo $string . "\n";
            break;
        default:
            // دستور نامعتبر
            break;
    }
}

function shiftR(string $string ,int $n)
{
    $len = strlen($string);

    $lastPart = substr($string, -$n);
    $firstPart = substr($string, 0, $len - $n);

    return $lastPart . $firstPart;
}

function shiftL(string $string ,int $n)
{
    
    $len = strlen($string);

    $lastPart = substr($string, $n);
    $firstPart = substr($string, 0, $n);

    return $lastPart . $firstPart;
}

function extend(string $string ,int $n)
{
    return  $string . str_repeat("*", $n);
}

function shrink(string $string ,int $n)
{
    $len = strlen($string);
    if ($n >= $len) return "";
    return substr($string, 0, $len - $n);
}

function reverse(string $string)
{
    return strrev($string);
}

function put($string, $index, $char)
{
    $index = $index - 1; // چون از ۱ شروع می‌شه
    if ($index >= 0 && $index < strlen($string)) {
        $string[$index] = $char;
    }
    return $string;
}
