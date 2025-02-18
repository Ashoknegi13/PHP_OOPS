<?php  // get magic method
class abc{
  private $data = ["name"=>"Ashok Negi","course"=>"backed Development","fee"=>2000];

  public function show(){
    return $this->name;
  }

  public function __get($key){
    
    if(array_key_exists($key, $this->data )){
        return $this->data[$key];
    }else{
        return "this key ($key)  does't not exits or not defined";
    }

   }
}

$obj = new abc();
 echo $obj->name ."<br>";
 echo $obj->course."<br>";
 echo $obj->fee."<br>";
 echo $obj->group;
 


// output :  Ashok Negi
//          backed Development
//          2000
//          this key (group) does't not exits or not defined


?>