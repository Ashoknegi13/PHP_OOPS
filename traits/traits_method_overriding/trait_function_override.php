<?php
trait A{
    public function hello(){
        echo " Hello from A trait<br>";
    }
}

trait B{
    public function hello(){
        echo " Hello from B trait";
    }
}
class base{
    use A,B{
        A::hello insteadOf B;
        B::hello as newHello;
    }
}

$obj = new base();
$obj->hello();
$obj->newHello();

// output :   Hello from A trait
//            Hello from B trait
?>