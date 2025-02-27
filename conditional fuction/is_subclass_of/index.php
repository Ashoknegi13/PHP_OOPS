<?php
class parentClass{

}
class childClass extends parentClass{

}
$obj = new childClass();

if(is_subclass_of($obj,"parentClass")){
    echo " This is \$obj the sub classs of parant class";
}else{
    echo  " This is not the sub classs of child class";
}
?>