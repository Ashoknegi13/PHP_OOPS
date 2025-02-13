<?php
class base{
    public static $name = " ashok negi";
}
class derived extends base{
    public function show(){
       echo  parent::$name;
    }
}

$obj = new derived();
$obj->show();
?>
