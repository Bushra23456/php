<?php
include("config/one.php");

$sql = "update user set name = 'harry' where id = 2";
$result = $conn -> query($sql);
if ($result == true){
    echo"<br> your record has been updated";
}
else{  echo"<br> no record has been updated";
}



?>