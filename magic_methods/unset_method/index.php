<?php
class abc{
    public $name="ashok";
    private $first_name,$last_name;

    public function setNames($fname,$lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
public function __unset($property){
    unset($this->$property);
}

}
$obj = new abc();
//$obj->name= "ashok";
$obj->setNames("Annu","Negi");
unset($obj->first_name);
echo "<pre>";
print_r($obj);
echo "</pre>";

?>