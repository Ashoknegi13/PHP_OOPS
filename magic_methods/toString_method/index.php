<?php
class abc{
    public function __toString(){
        return " You can't print object as a string of the class : ". get_class($this)  ;
    }
}

$obj = new abc();
echo $obj;
?>