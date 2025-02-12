<?php
class base{
    public function calc($num1,$num2){
        echo "sum is : ". $num1 + $num2;
    }
}
class derived extends base{
    public function calc($num1,$num2){
        echo "sub is : " . $num1 - $num2;
    }
}

// $obj = new base();
// $obj->calc(20,1);   output is : 21   this is base class methode

$obj = new derived();
$obj->calc(20,1);  // output : 19  first  perioties is devrived class then base class
?>