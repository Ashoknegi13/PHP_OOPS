<?php
class test{
    protected $name,$age;

    public function __construct($n,$a){
        $this->name = $n;
        $this->age = $a;
         
    }

    protected function show(){
        echo " Name is : ". $this->name ."<br> age : ". $this->age ;
    }
}

class result extends test{
    public function getData(){
        echo " Name is : ". $this->name ."<br> age : ". $this->age ;
    }
}

$obj = new result("ashok",23);
$obj->getData();
?>