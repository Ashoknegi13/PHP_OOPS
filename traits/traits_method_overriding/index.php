<?php
trait A{
    public function hello(){
        echo " Hello from trait A <br>";
    }
}
class parents{
    public function hello(){
        echo "hii from parents class";
    }
}
class base extends parents{
    use A;
}
$obj = new base();
$obj->hello();

// output :   Hello from trait A

?>