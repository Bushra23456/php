<?php

$fruits= ["apple" , "mango" , "banana" ,"orange"];

echo"<br> $fruits[1]";

foreach($fruits as $key){
    echo"<br> $key";
}

// associate array

$empolyees = ["Dexter" => "UI/UX developer", "Alex" => "graphic designer", "Peter" => "web developer", "Advarb" => "app designer"];
foreach($empolyees as $key => $value){
    echo"<br> $key:$value";
}

for($z=0; $z<=10;  $z++){
    for($t=0; $t<$z;  $t++){
    echo " *"  ;
   
}
echo "<br>";
}






?>

