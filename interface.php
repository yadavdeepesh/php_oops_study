<?php
// interface

interface parent1{
    function sum($a,$b);
}

interface parent2{
    function sub($a,$b);
}

interface parent3{
    function div($a,$b);
}

interface parent4{
    function mul($a,$b);
}

// create the child class and declare the body of methods
class childClass implements parent1,parent2,parent3,parent4{
   public function sum($a,$b){
      echo "sum = ".$a + $b ."<br>";
   }
   public function sub($a,$b){
    echo "sub = ".$a - $b ."<br>";
 }
  public function div($a,$b){
    echo "div = ".$a / $b ."<br>";
 }
 public function mul($a,$b){
    echo "mul = ".$a * $b ."<br>";
 }
}

// $test = new parent1();// do not create object of interface
// create the object of child class 

$child = new childClass();
$child->sum(2,3);
$child->sub(2,3);
$child->div(2,3);
$child->mul(2,3);



?>