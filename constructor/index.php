<?php
  class person{
    public $name , $age , $city;

    public function __construct($n="unknown" , $a=0 , $c="no city"){
        $this->name = $n;
        $this->age = $a;
        $this->city = $c;
    }
    public function Show(){
        echo $this->name . " - " . $this->age . " - " . $this->city ."<br>";
    }
  }

  $obj1 = new person("Ashok negi",21,"Rudraprayag");
  $obj2 = new person("Rahul negi",19,"Srinager");
  $obj3 = new person("Saurabh",24,"Heydrabad");
  $obj4 = new person();

  $obj1->Show();
  $obj2->Show();
  $obj3->Show();
  $obj4->Show();

// output-      Ashok negi - 21 - Rudraprayag
//              Rahul negi - 19 - Srinager
//              Saurabh - 24 - Heydrabad
//              unknown - 0 - no city
?>