<?php

class StringUtils
{
    public function commaAdder($number)
    {
        if (!is_numeric($number)) {
            return -1;
        }
        $numRound = round($number);
        $numStr = (string)$numRound;
        $reversed = strrev($numStr);
        $newNum = "";

        for ($i = 0; $i < strlen($reversed); $i+=3) {
            $newNum .= substr($reversed, $i, 3) . "," ;

        }

//       $newNum = substr($reversed, 0, 3) . "," .substr($reversed, 3,3) . "," .substr($reversed, 6,3);
        $newNum = rtrim($newNum, ",");
        return strrev($newNum);
    }

    public function cammaRemove($number)
    {
//        $newNum = "";
//        for ($i = 0; $i < strlen($number); $i+=4) {
//            $newNum .= substr($number, $i, 3);
//
//        }
//        $num = substr($number, 0, 3).substr($number, 4, 3).substr($number, 8,3);
//        return $newNum;


//        $numArray = array_diff($array, ",");
        $newNum = "";
        $array = explode(",",$number);
        for($i = 0; $i < count($array); $i++){
            $newNum .= $array[$i];
        }
        if(!is_numeric($newNum)){
            return -1;
        }
        return $newNum;
    }

}

