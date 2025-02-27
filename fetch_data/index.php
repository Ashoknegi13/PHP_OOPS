<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}

$sql = "SELECT * FROM  student LEFT JOIN city ON student.citys = city.cid";
$result = $conn->query($sql);
if($result->num_rows >0){   
        while($row = $result->fetch_assoc()){
            echo "Id : {$row['id']} - name : {$row['student_name']} -  Age : {$row['age']} - city : {$row['city_name']} <br>";
        }
}else{
    echo " no data found";
}

$conn->close();

?>