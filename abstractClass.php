<?php
abstract class parentClass{
    public $name;
    abstract protected function sum($a,$b);

}
class childClass extends parentClass{
    public function sum($a,$b){
        echo $a + $b;
    }

}

$test = new childClass();
$test -> sum(2,3);


?>