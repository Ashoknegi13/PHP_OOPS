<?php  // __isset() magic method
class abc{
    public $course  = "PHP";
    private $first_name;
    private $last_name;
    private $details = ['name'=> "Ashok" , "age"=>21 , "city"=>"rpg"];

    public function setNames($fname , $lname){
      $this->first_name = $fname;
      $this->last_name = $lname;
    }

    public function __isset($key){
        echo isset($this->details[$key]);
    }

}

$obj = new abc();
//$obj->setNames("Ashok","negi");


 isset($obj->age);

 // output :    1 
?>