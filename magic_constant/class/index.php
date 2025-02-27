<?php // __CLASS__ constant
class test{
    public function getClassName(){
        echo " Current class name is : ".__CLASS__;
    }
}
$obj = new test();
$obj->getClassName();

// output :   Current class name is : test
?>