<?php
class A{
    //  public $name;// access everywhere 
    //protected $name ="No name"; // acess only derived class
    private $name ="No name";
     private function show (){
        echo $this -> name;
     }
}
class B extends A{
    public function get(){
        echo "Your Name ".$this -> name;

    }
   
}

// create object 

$test = new A("dk");
// $test = new B();

 $test -> show();
//  $test->get();


?>
