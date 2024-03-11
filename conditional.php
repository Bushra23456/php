<?php
$age = 10;

if($age >=20){
  echo"<br> you can drive a car";
}
else{
    echo"<br> you can  not drive a car";
}
echo"<br>";
$iscnic = false;
$age = 20;

if($age >=18){
 echo "<br> you can drive a car";
 if($iscnic === true){
    echo "<br>you can take my car";
 }
 else{
    echo "<br>you can go home and purchase your own car ";
 }

}
else{
    echo"<br> you can not drive my car";
}
for($myNumber=0; $myNumber<=50; $myNumber++){
    if($myNumber%2==0){
        echo"<br>this number is even".$myNumber;
    }
    else{
        echo"<br>this number is odd".$myNumber;
    }
}
?>