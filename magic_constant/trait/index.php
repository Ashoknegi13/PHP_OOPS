<?php
trait myTrait{
    public function getTrait(){
        return "trait name is :".__TRAIT__;
    }
}
class test{
    use myTrait;
}

$obj = new test();
echo $obj->getTrait();
?>