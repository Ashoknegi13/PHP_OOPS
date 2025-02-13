<?php
    class base{
        protected static $name = "Ashok";
        public function show($a,$b){
            echo static::$name ."<br>";
            echo static::sub($a,$b)."<br>";
            echo self::sub($a,$b);
        }
        public static function sub($a,$b){
            echo $a + $b;
        }
    }
    class derived extends base{
        protected static $name = "Negi";
        public static  function sub($a,$b){
            echo $a - $b;
        }
    }
    $obj = new derived();
    $obj->show(10,5);

// output : Negi
//          5
//          15

?>