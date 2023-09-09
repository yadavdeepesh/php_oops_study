<?php
class base{
    public $name ="Deepesh";
    function cal($a,$b){
        return $a + $b;
    }
}
class dervied extends base{
    public $name ="Eshu";
    function cal($a,$b){
        return $a - $b;
    }
}

// access property 
$test = new base();
echo "sum of two number ".$test->cal(2,3);
echo "<br>";
$test = new dervied();
echo "subtraction of two number ".$test->cal(2,3);
?>