<?php
$v = [1,5,6,50];


$suma = $v[0] + $v[1] + $v[2] + $v[3];
echo "batura : " . $suma;
echo "<br>";
echo "<br>";



//for
$suma1 = 0;
for ($i = 0; $i < count($v); $i++) {
  //echo "The number is: $x <br>";
  //echo " i: " . $i;
  $suma1 = $suma1 + $v[$i];
  //echo "; suma:" . $suma;
  //echo "<br>";
    }
echo "batura1 : " . $suma1;
echo "<br>";
echo "<br>";


//while
$suma2 = 0;
$x=0;
while($x < count($v)){
    $suma2= $suma2 + $v[$x];
    $x++;
}

echo "batura2 : " . $suma2;
echo "<br>";
echo "<br>";

//foreach
$x1 = 0;
$suma3 = 0;
foreach ($v as $x1) {
    $suma3 = $suma3 + $x1 ;
}

echo "batura3 : " . $suma3;
echo "<br>";
echo "<br>";
 ?>
