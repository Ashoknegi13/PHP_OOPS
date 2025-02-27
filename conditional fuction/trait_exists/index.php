<?php
trait A{
    public function show(){

    }
}

if(trait_exists("A")){
    class test{
        use A;
    }
    echo "trait exists";
}else{
    echo " trait not exits";
}
?>