<?php
class ParentClass{
    public static $name = "deepesh";
    public static function show(){
        echo self::$name;
    }
}
class DerivedClass extends ParentClass{
    public function __construct(){
        echo "Constructor is called <br>";
        echo parent::$name;
    }
}

$derivedcclass = new DerivedClass();
echo "<br> Static Member <br>";
ParentClass :: $name;

echo "<br>";
ParentClass :: show();



?>