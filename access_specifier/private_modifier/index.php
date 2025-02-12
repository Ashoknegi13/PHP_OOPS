<?php
class test{
    private $name , $age;

    public function __construct($n,$a){
        $this->name = $n;
        $this->age = $a;
    }

    public function show(){
        echo "Name is : ". $this->name . "<br> Age : " . $this->age;
    }
}

class result extends test{
    public function get(){
        echo "Name is : ". $this->name . "<br> Age : " . $this->age;  // not accessable
    }
}

$obj = new result("Ankit",25);
$obj->show();
?>