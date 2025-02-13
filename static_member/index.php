<?php
    class parent1{
        public static $name = "Ashok Negi";
        public static function show(){
            echo self::$name;
        }

        public function __construct($n){
            self::$name = $n;
        }
    }

    $obj = new parent1("Ankit");
    $obj->show();
    // parent1::show();
    // parent1::$name;

    // ouput-    Ankit
?>