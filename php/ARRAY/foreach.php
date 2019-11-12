<?php
/*
$v = [1,2,3];
$suma = 0;
foreach ($v as $x) {
    //echo $x . "<br>";
    $suma = $suma + $x;
}
echo "batura foreach: " . $suma;
*/

$vv = [[1,2,3],[4,5,6]];
$suma = 0;
foreach ($vv as $v) {
  foreach ($v as $x) {
    //echo $x . "<br>";
    $suma = $suma + $x;
    }
}
echo "batura foreach: " . $suma;

?>
