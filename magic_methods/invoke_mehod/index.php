<?php
class calculation{
    public $a,$b;

    public function __construct($x,$y){
        $this->a = $x;
        $this->b = $y;
    }

    public function sum(){
        echo $this->a + $this->b;
    }

    public function __invoke(){
        echo $this->a + $this->b;
    }
}

$obj = new calculation(10,1);
// $obj->sum();
$obj();

// output : 11
?>