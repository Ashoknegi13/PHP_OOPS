
<?php
    class A{
        function sum(int $num){
            echo $num +1;
        }
    }

    $obj = new A();
    $obj->sum(10);
?>