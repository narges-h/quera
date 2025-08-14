<?php
$aray = array();
for($i = 0;$i < 4;$i++){
    $num1 = readline();
    $num = intval($num1);  
    array_push($aray,$num);
}
class Operation{
    public function sum($aray){
        $sum = 0;
        foreach($aray as $i){
            $sum += $i;
        }
        return $sum;
    }
    public function avg($sum){
        $avg = $sum/4;
        return $avg;
    }
    public function pro($aray){
        $pro = 1;
        foreach($aray as $i){
            $pro *= $i;
        }
        return $pro;
    }
}

$opt = new Operation();
$summ = $opt->sum($aray);
echo "Sum : ".number_format($summ,6)."\n";
$avgg = $opt->avg($summ);
echo "Average : ".number_format($avgg,6)."\n";
$proo = $opt->pro($aray);
echo "Product : ".number_format($proo,6)."\n";

echo "MAX : ".number_format(max($aray),6)."\n";

echo "MIN : ".number_format(min($aray),6);





