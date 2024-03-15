<?php
include("config/one.php");

$sql = "delete from user where id = 1";
$result = $conn -> query($sql);
if ($result == true){
    echo"<br> your record has been deleted";
}
else{  echo"<br> no record has been deleted";
}
?>