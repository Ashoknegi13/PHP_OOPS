<?php
class test{
    public function show(){
        echo "from inside class name is : ". get_class($this);
    }
}
$obj= new test();
$obj->show();
echo "<br>from outside class name is : ". get_class($obj);
?>