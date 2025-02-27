<?php
class student{
    public $course = "php";
    private $name,$age;

    public function setNames($n,$a){
        $this->name = $n;
        $this->age = $a;
    }

    public function __sleep(){
        return array("name","age");
    }

    public function __wakeup(){
        echo " This is unseralize magic method";
    }
} 

$obj = new student();
$obj->setNames("ashok",22);
$ser = serialize($obj);
echo $ser;

$us = unserialize($ser);
echo "<pre>";
print_r($us);
echo "</pre>";

?>