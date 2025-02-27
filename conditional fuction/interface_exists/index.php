<?php
interface myInterface{
    public  function show();
}


if(interface_exists("myInterface")){
    echo "This myInterface is Exists : ";
    class test implements myInterface{
        public static $class = __CLASS__;
        public  function show(){
            
        }
}
}else{
    echo "this interface not exists ";
}
?>