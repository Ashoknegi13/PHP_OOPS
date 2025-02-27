<?php
class test{
    public $num1,$num2="ashok",$num3=21;
    private $count;

    public function __construct(){
                echo "<pre>";
                print_r(get_class_vars(__CLASS__));
                echo "</pre>";
    }
}

$obj= new test();

$all_vars = get_class_vars(get_class($obj));
echo "<pre>";
print_r($all_vars);
echo "</pre>";
?>