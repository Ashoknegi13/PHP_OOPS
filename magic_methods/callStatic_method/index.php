<?php // __callStatic() magic mathod

class student{
     private static function showName($name){
        return " Hello  $name";
     }

     public static function __callStatic($method,$argu){
        if(method_exists(__class__,$method)){
           return call_user_func_array([__class__,$method],$argu);
        }else{
            echo "This method does't exiets : ($method)";
        }
     }

}

echo student::showName("AShok");

// output :   Hello Ashok
?>