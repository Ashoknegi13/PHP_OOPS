<?php
class employee{
    public $name,$age,$salary;   // data members 
    public function __construct($n="Unknown",$a=0,$s=0){   // member function
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    public function Info(){
        echo "<h2>Employee Dateails</h2>";
        echo "Employee Name : ". $this->name ."<br>";
        echo "Employee Age : ". $this->age."<br>";
         echo "Employe Salary : ". $this->salary ."<br>";
      }
}   
class manager extends employee{
    public $ta = 1000, $phone = 400,$total_salary;
    
    public function Info(){
        $this->total_salary = $this->salary + $this->ta + $this->phone;
     echo "<h2>Managers Dateails</h2>";
     echo "Managers Name : ". $this->name ."<br>";
     echo "Managers Age : ". $this->age."<br>";
     echo "Managers Salary : ". $this->total_salary . "<br>";
  }
}

$obj1 = new employee("ashok",21,2000);
$obj2 = new manager("ankit",25,12000);

$obj1->Info();
$obj2->Info();

// output -  Employee Dateails
//               Employee Name : ashok
//               Employee Age : 21
//               Employe Salary : 2000

//            Managers Dateails
//                 Managers Name : ankit
//                 Managers Age : 25
//                 Managers Salary : 13400
?>