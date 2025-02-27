<?php
class student{
    public $course = "PHP";
    private $name;
    private $age;

    public function setNames($n , $a){
        $this->name = $n;
        $this->age =  $a;
    }

    public function __sleep(){
        return array("name","age");
    }

}

$obj = new student();
$obj->setNames("ashok",21);
$ser = serialize($obj);
echo $ser;

// output :   O:7:"student":2:{s:13:"studentname";s:5:"ashok";s:12:"studentage";i:21;}
?>