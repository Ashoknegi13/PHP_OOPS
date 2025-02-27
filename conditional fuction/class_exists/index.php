<?php
class test{
        public static $class = __CLASS__;
}

if(class_exists("test")){
    echo "This class is Exists : " .test::$class;
}else{
    echo "This class is not exists : ".__CLASS__;
}
?>