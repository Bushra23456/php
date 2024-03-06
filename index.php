<?php
 $name = "hello";  //string
 $age =30;  //number
 $iscnic = true;  //boolean
 $marks = 85.5;  //float


 echo "$name";
 echo "<br>$age";
 echo "<br>$iscnic <br> $marks";
 
 //arithematic

 $a= 30;
 $b = 25;
 $c = $a+$b;
 $d = $a-$b;
 $e = $a*$b;
 $f = $a/$b;
 $g = $a%$b;

 echo "<br>the sum of $a+$b is :".$c;
 echo "<br>the sub of $a-$b is :".$d;
 echo "<br>the mul of $a*$b is :".$e;
 echo "<br>the divide of $a/$b is :".$f;
 echo "<br>the modulus of $a%$b is :".$g;

 $apple = 40;
// post increment
 echo "<br> the increment of this number is :" .$apple++;
 echo "<br>" .$apple;

echo "<br>the increment of this number is :" .++$apple;

echo "<br>the decrement of this number is:" .--$apple;
echo "<br> the decrement of this number is :" .$apple--;

$app = 209;
echo "<br> the initial number is:" .$app;
echo "<br> the sub number is:" .--$app -1;
echo "<br> the add initial is" .++$app +6;
echo "<br> the sub initial is" .--$app -8;
echo "<br> the sub initial is" .--$app -102;


// loop
for($i=1; $i<=10; $i++){
    echo"<br>19 x $i =" .$i*19;
}

$tableNumber = 22;
for($y=1; $y<=10; $y++){
    echo "<br> $tableNumber x $y =" .$tableNumber*$y;
}

for($z=0; $z<=10;  $z++){
    for($t=0; $t<$z;  $t++){
    echo " *" ;
   
}
echo "<br>";
}


$tree = 65;
while
($tree <= 69){
    echo"<br> is hello world".$tree;
    $tree++;
}

$file=90;
do{
    echo"<br> this is do while loop" .$file;
    $file++;
}
while($file<=93);


?>