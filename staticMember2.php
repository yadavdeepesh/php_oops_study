<?php
class ParentClass{
    public static $name = "deepesh";
    public static function show(){
        echo self::$name;
    }
}
class DerivedClass extends ParentClass{
    public function __construct($n){
        echo "Constructor is called <br>";  
        echo parent::$name = $n;
    }
}

$derivedcclass = new DerivedClass("deepu kumar");
echo "<br> Static Member <br>";
ParentClass :: $name;

echo "<br>";
ParentClass :: show();



?>