<?php
  class claculation{
    public  $a,$b,$c;

    public function Sum(){
        $this->c = $this->a + $this->b;
        return "sum is : " . $this->c;
    }

    public function Sub(){
        $this->c = $this->a - $this->b;
        return "Sub is : " . $this->c;
    }
  }

  $obj = new claculation;
  $obj->a = 12;
  $obj->b = 2;

  echo  $obj->Sum(). "<br>";
  echo  $obj->Sub();

   
?>