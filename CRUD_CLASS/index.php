<?php
require "database.php";

$obj = new Database();
// $obj->insert('student',["student_name"=>"rahul","age"=> 19,"citys"=>3]);
// $obj->insert('student',["student_name"=>"saurabh","age"=> 24,"citys"=>1]);
// $obj->insert('student',["student_name"=>"vipin","age"=> 49,"citys"=>2]);
// $obj->insert('student',["student_name"=>"nikita","age"=> 29,"citys"=>2]);
// print_r($obj->getMethod());


// $obj->update('student',["student_name"=>"sonam","age"=>101,"citys"=>1], "id = '10' ");
// print_r($obj->getMethod());

// $obj->delete("student","id = '14' ");
// echo " delete data : ";
// print_r($obj->getMethod());



// echo "All studnet are : <pre>";
// $obj->sql("SELECT student_name , age , city_name FROM student JOIN city ON student.citys = city.cid WHERE city_name = 'rpg' ");
// print_r($obj->getMethod());
// echo "</pre>";




$join = "city ON student.citys = city.cid ";
$column = "student.id , student.student_name,student.age,city.city_name";
$obj->select('student',$column,$join,null,null,2);
echo "<pre>";
 print_r($obj->getMethod());
echo "</pre>";



$obj->pagination('student',$join,null,2);
 
// $arr = $obj->getMethod();

// foreach($arr as  $value){    
//         foreach($value as $key => $value2){
//             echo "  <th>". ucfirst($key)."</th> <br>";
//         }
// }
 



?>