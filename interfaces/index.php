<?php
interface parent1{
    function calc($a,$b);
}

interface parent2{
    function sub($a,$b);
}

class childClass implements parent1,parent2{
    public function calc($a,$b){
        return $a + $b;
    }

    public function sub($a,$b){
        return $a-$b;
    }
}

$obj = new childClass();
echo "sum is : " . $obj->calc(10,20);
echo "<br>sub is : " . $obj->sub(10,6);

// output-    sum is : 30
//            sub is : 4
?>