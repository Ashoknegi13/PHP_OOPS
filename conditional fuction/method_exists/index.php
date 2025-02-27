<?php
class test{
    public function show(){

    }
}
$obj = new test();
if(method_exists($obj,"show")){
    echo " method exists ";
}else{
    echo " method not exists";
}
?>