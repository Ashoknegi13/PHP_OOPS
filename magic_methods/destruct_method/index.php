<?php
class abc{
    public function __construct(){
        echo " this is construct function <br>";
    }

    public function show(){
        return " hello world <br>";
        }

    public function __destruct(){
        echo " This is destruct function";
    }
}

$obj = new abc();
echo $obj->show();
echo $obj->show();
?>