<?php // methode chaining
class abc{
        public function first(){
            echo "this is first function <br>";
            return $this;
        }
        public function second(){
            echo "this is second function <br>";
            return $this;
        }
        public function third(){
            echo " This is third function ";
        }
}
$obj = new abc();
$obj->first()->second()->third();

// output : this is first function
//          this is second function
//          This is third function
?>