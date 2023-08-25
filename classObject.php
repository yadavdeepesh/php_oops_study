<?php

class CalculationNew{

    public $a , $b ;

    public function sum($a , $b){
        return ($a + $b);
    }
    public function sub($a , $b){
        return ($a - $b);
    }
}

$o1 = new CalculationNew();

echo "sum of two number = ".$o1->sum(2,2);
echo "<br>";
echo "sub of two number = ".$o1->sub(2,2);
