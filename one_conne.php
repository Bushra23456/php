<?php
include("config/one.php");

$sql = "insert into user (name , email , password) values ('alex' , 'alex@gmail.com' , 'alex555')";
$result = $conn -> query($sql);

if ($result == true){
    echo"<br> your record has been inserted";
}
else{  echo"<br> no record has been inserted";
}

?>