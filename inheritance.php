<?php
// inheritance in php

class Employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n , $a , $s){
        $this -> name = $n;
        $this -> age = $a;
        $this -> salary = $s;
    }
 
    function info(){
        echo "<h1> Employee Profile </h1>";
        echo "Employee Name : ".$this -> name ."<br>";
        echo "Employee Age : ".$this -> age ."<br>";
        echo "Employee Salary :".$this -> salary ."<br>";
    }
}

class Manager extends Employee{
 public $ta = 1000;
 public $phone = 300;
 public $totalSalary;
  
 function info(){
    $this->totalSalary = $this -> salary + $this -> ta + $this -> phone;
    echo "<h1> Manager Profile </h1>";
    echo "Manager Name : ".$this -> name ."<br>";
    echo "Manager Age : ".$this -> age ."<br>";
    echo "Manager Salary :".$this->totalSalary ."<br>";
}

}
// create the object 

$e1 = new Employee("Deepesh",24 , 25000 );
$e1 -> info();
echo "<br>";
$m1 = new Manager("Ravi" ,25 , 30000);
$m1-> info();

?>