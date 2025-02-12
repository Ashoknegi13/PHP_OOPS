<?php
class base{
    public $name = "base class";
}
class derived extends base{
    public $name = "derived class";
}

$obj = new derived(); // output : derived clas
echo $obj->name;

// $obj = new base();   //  output : base class
// echo $obj->name;
?>