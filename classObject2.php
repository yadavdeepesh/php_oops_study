<?php

class Calculation{

    public $a , $b ;

    public function sum(){
        return ($this->a + $this->b);
    }
    public function sub(){
        return ($this->a - $this->b);
    }
}

$o1 = new Calculation();
$o1->a = 10;
$o1->b = 20;

echo "sum of two number = ".$o1->sum();
echo "<br>";
echo "sum of two number = ".$o1->sub();


