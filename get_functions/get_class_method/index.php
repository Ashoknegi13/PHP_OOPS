<?php
class test{
    public function  __construct(){
        echo "<pre>";
        print_r(get_class_methods($this));
        echo "</pre>";
    }
    public function hello(){
    }
    private function  hii(){
      
    }
}

$obj = new test();

 $class_methods = get_class_methods("test");
 echo "<pre>";
 print_r($class_methods);
echo "</pre>";
?>