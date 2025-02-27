<?php
class xyz{
    
}
class test extends xyz{
    public function show(){
        echo "from inside class name is : ". get_parent_class($this);
    }
}
$obj= new test();
$obj->show();
echo "<br>from outside class name is : ". get_parent_class($obj);
?>