<?php  // __call megic method
class student{
    private $firstname,$lastname;
    private function setNames($fname,$lname){
        $this->firstname = $fname;
        $this->lastname = $lname;
    }

    public function __call($method , $argu){
        if(method_exists($this,$method)){   // check methode exit or not 
            call_user_func_array([$this,$method], $argu);   // callback function
        }else{
            echo "This ($method) does't exits";
        }
    }
}

$obj = new student();
$obj->setNames("ashok","negi");
 echo "<pre>";
print_r($obj);    // print the object
 echo "</pre>";

 // output :      student Object
 //                    (
 //                       [firstname:student:private] => ashok
 //                       [lastname:student:private] => negi
//                     )
?>