<?php
require "database.php";

$obj = new Database();



echo "<div style='margin-left:30%'><button style='margin-bottom:5px;margin-left:4px;background-color:green;'><a style='color:white;text-decoration:none' href='form.php'><b>Add User</b></a></button></div>";

$join = "city ON student.citys = city.cid ";
//$column = "student.id , student.student_name,student.age,city.city_name";
$obj->select('student',"*",$join,null,' id DESC',3);
 $result = $obj->getMethod();

//  echo "<pre>";
// print_r($result);
// echo "</pre>";


echo "<div style='margin-left:30%'><table border='1px' cellspacing='0px' cellpadding='10px'>
        <tr style='background-color:tan;color:black'> <th>Student Id </th>
             <th>Student Name </th>
             <th>Student Age </th>        
             <th>Student City </th>
        </tr>";
foreach($result as list("id"=>$id,"student_name"=>$name,"age"=>$age,"city_name"=>$cname)){
    echo "<tr>
            <td>$id</td>
            <td>$name</td>
            <td>$age</td>
            <td>$cname</td>
        </tr>";
}

echo "</div></table>";



$obj->pagination('student',$join,null,3);
 
?>