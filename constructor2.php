
<?php 
class Person {
    public  $name;
    public $age ;
    public function __construct($name ="dk" ,$age = 24) {
        $this->name = $name;
        $this->age = $age;
    }
    function show(){
        echo "Name ".$this->name."<br>";
        echo "Age ".$this->age;
    }
}
// create the object 
$p1 = new Person();
$p1->show();
echo "<br>";
$p2 = new Person("Deepesh",23);
$p2->show();
?>