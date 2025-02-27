<?php
class test{
    public $name;
}
$obj=new test();

if(property_exists($obj,"name")){
    echo "property exists";
}else{
    echo "property does't exists";
}
?>