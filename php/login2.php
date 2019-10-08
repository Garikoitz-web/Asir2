<?php

//definir los datos
$user1 = "koxme";
$user1_password = "p1";

$user2 = "peru";
$user2_password = "p2";

$user = $_POST["user"];
echo "<br>";
$password = $_POST["password"];





//1
/*
if ($user == $user1 AND $password == $user1_password) {
  echo "OK";
} else if ($user == $user2 AND $password == $user2_password) {
  echo "OK";
} else {
  echo "KO";
};
*/




//2
if ($user == $user1){
  if ($password == $user1_password) {
    echo "OK";
  }
  else if ($user == $user2){
    if ($password == $user2_password) {
      echo "OK";
    }
    else {
      echo "ERROR";
    }
}
/*
if (($user == $user1 && $password == $user1_password) || ($user == $user2 && $password == $user2_password)) {
  echo "OK";
} else {
  echo "KO";
};

echo "<br>";

echo password_hash($password, PASSWORD_DEFAULT)."\n";
*/


/*
$user1 = $_GET["user"];
echo "<br>";
$user1_password = $_GET["password"];


if ($user1 == "koxme" AND $user1_password == "p1") {
  echo "OK";
}
else {
  echo "KO";
};
*/
?>
