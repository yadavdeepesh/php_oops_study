
<?php 
class Person {
    public  $name;
    public function __construct($name) {
        $this->name = $name;
    }
    function show(){
        echo "Name ".$this->name;
    }
}
// create the object 
$p1 = new Person("Deepesh");
$p1->show();
?>