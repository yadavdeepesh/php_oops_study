<?php
trait hello{
    public function sayHello(){
        echo "Hello Everyone <br>";
    }
    
}

trait bye{
    public function sayBye(){
        echo "Bye Bye Everyone <br>";
    }
    public function sayHi(){
        echo "Hi Everyone , I am Deepesh <br>";
    }

}

class Test{
    use hello,bye;
}

class Test2{
    use hello,bye;
}
// create obejct of class and using traits

$test = new Test();
$test -> sayHello();
$test -> sayHi();
$test -> sayBye();

echo "<h1>Second Class test1</h1> <br>";
$test1 = new Test2();
$test1 -> sayHello();
$test -> sayHi();
$test1 -> sayBye();


?>