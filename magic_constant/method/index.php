<?php
class test{
    public function getMethodName(){
        echo " cureent method name is : ". __METHOD__;
    }
}

$obj = new test();
$obj->getMethodName();

// output  :  cureent method name is : test::getMethodName
?>