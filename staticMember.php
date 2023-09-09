<?php
class ParentClass{
    public static $name = "deepesh";
    public static function show(){
        echo self::$name;
    }
}
echo ParentClass::$name;
echo "<br>";
ParentClass::show();
echo "<br>";
$parent = new ParentClass();
$parent -> show();

?>