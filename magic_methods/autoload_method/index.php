<?php
// require "classes/first.php";
// require "classes/second.php";

 require "third.php";
 
 function autoloader($class){
    require "classes/". $class .".php";
 }

 spl_autoload_register("autoloader");

$f1 = new first();
$f2 = new first();
$s1 = new second();
$t1 = new third();

// output :   hello from first class
//            hello from first class
//            hello from second class
//            hello from third class
 
?>