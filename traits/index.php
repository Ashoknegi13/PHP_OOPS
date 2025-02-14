<?php
trait A{
    public function sum($a,$b){
        echo "Sum is : " .$a+$b . "<br>";
    }
}

trait B{
    public function sub($a,$b){
        echo "Sub is : ".$a-$b;
    }
}

class parents{
    use A;
}

class base extends parents{
    use B;
}

$obj = new base();
$obj->sum(10,3);
$obj->sub(10,3);

//   output :   Sum is : 13
//              Sub is : 7

?>