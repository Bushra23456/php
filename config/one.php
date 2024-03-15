<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "f2";

$conn = new mysqli($servername , $username , $password , $dbname);
if($conn){
    echo"connection successful";
}
else{
    echo"connection failed";
}


?>