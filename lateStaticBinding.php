<?php
class person {
    public static $name ="Deepesh";
    public function show(){
      //  echo self::$name;
        echo static::$name;
    }
}
class employee extends person {
    public static $name;
    public function __construct($n){
        echo static::$name =$n;
        echo "<br>";
    }
   
}

// create a object 
$test = new employee("khushi yadav");
$test -> show();



?>