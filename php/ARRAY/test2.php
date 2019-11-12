<?php

$vv = array
  (
  array(1,2,3),
  array(6,4,5),
  );


//$suma = $vv[0][0] + $vv[0][1] + $vv[0][2];
//$suma1 = $vv[1][0] + $vv[1][1] + $vv[1][2];

$suma = $vv[0][0] + $vv[0][1] + $vv[0][2] + $vv[1][0] + $vv[1][1] + $vv[1][2];

echo "suma : " . $suma;
echo "<br>";
//echo "suma1 : " . $suma1;
//echo "<br>";



// for
$sumafor = 0;
//$sumafor1 = 0;
for ($i = 0; $i < count($vv); $i++) {
    //$sumafor = $vv[0][0] + $vv[0][1] + $vv[0][2];
    for ($j = 0; $j < count($vv); $j++) {
        //$sumafor1 = $vv[1][0] + $vv[1][1] + $vv[1][2];
        $sumafor = $vv[0][0] + $vv[0][1] + $vv[0][2] + $vv[1][0] + $vv[1][1] + $vv[1][2];
    }
}
echo "sumafor :  " . $sumafor . "<br>";
//echo "sumafor1 " . $sumafor1 . "<br>";

//while
$sumawhile = 0;
$w = 0;
$z = 0;
while($w < count($vv)){

    $w++;
    while($z < count($vv)){
        $sumawhile = $vv[0][0] + $vv[0][1] + $vv[0][2] + $vv[1][0] + $vv[1][1] + $vv[1][2];
        $z++;
    }
}

echo "sumawhile : " . $sumawhile;
echo "<br>";
echo "<br>";



// foreach
$sumaforeach2 = 0;
foreach ($vv as $v) {
    foreach($v as $x) {
        $sumaforeach2 = $sumaforeach2 + $x;
    }
}
echo "batura foreach: " . $sumaforeach2;
/*

*/

 ?>
