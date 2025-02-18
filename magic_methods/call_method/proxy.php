<?php // Proxy pattern using __call magic method
class APIproxy{
    private $realapi;

    public function __construct($api){
        $this->realapi = $api;
    }

    public function __call($method , $argu){
        echo "Logging :  Calling Method : $method .....<br>";
        if(method_exists($this->realapi , $method)){
            return call_user_func_array([$this->realapi , $method], $argu);
        }else{
            echo "Error : Methode ($method) does't exit in api....";
        }
    }
}

class Realapi{
    public function getData($id){
        return " Fetch data  for id : $id";
    }
}

$obj = new APIproxy(new Realapi());
echo $obj->getData(12);  // calling methode via proxy 

// output :   Logging : Calling Method : getData .....
//            Fetch data for id : 12
?>