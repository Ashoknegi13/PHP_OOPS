<?php
require("database.php");
$obj  = new database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <div style="margin-left:40%;background-color:tan;margin-top:30px;width:20%;padding:40px">
        <div style="font-size:25px;background-color:white">
    <form action="save-data.php" method="POST"> 
        <lable>Name :</lable>
        <input type="text" name="sname" placeholder="name" required><br><br>
        <lable>Age :</lable>
        <input type="number" name="sage" placeholder="age" required><br><br>
        <lable>city </lable>
        <select name='scity'>
            <?php
                $obj->select("city");
                $result = $obj->getMethod();
            foreach($result as list("cid"=>$id,"city_name"=>$cname)){
                echo "<option value=$id> $cname </option>"; 
            }
        ?>
        </select><br><br>
        <input type="submit"  name="btn" value="Save">       
    </form>
       </div>    
 </div>
</body>
</html>