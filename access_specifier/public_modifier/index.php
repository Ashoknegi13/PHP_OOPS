<?php
class test{
    public $name,$age;

    public function __construct($n,$a){
        $this->name = $n;
        $this->age = $a;
    }
    public function Show(){
        echo "Name is : " .$this->name ." <br> age : ". $this->age;
    }
}

$obj = new test("Ashok negi",21);
$obj->Show();

// output-    Name is : Ashok negi
//            age : 21
?>