<?php  // set magic method
class abc{
    private $name,$course;

    public function show(){
        echo $this->course;
        echo $this->name;
    }
 
    public function __get($property){
        echo " This is undefiend or private propertie : $property";
    }


    public function __set($property, $val){
       if(property_exists($this, $property)){
        $this->$property = $val;
       }else{
            echo "Propertiy does't exits : $property";
       }
    }

}

$obj = new abc();
$obj->name="ashok negi";
$obj->course="PHP <br>";
 $obj->show();
 

// output :  PHP
//          ashok negi
?>