<?php

//definir los datos
$user1 = "koxme";
$user1_password = '$2y$10$/yhoaDf2YOLwOHBZdjwApe7lim.8zQqOGahzJzwe3xxi5jhDBw4JS';

// $hash = '$2y$10$/yhoaDf2YOLwOHBZdjwApe7lim.8zQqOGahzJzwe3xxi5jhDBw4JS';



$user2 = "peru";
$user2_password = "p2";

//leer desde el formulario
$user = $_POST["user"];
echo "<br>";
$password = $_POST["password"]

if ($user == $user1){
  if (password_verify($password, $user1_password))
  echo "OK";
} else {
  echo "Error";
}

// echo $hash . "<br>";

/*
if (password_verify($user == $user1 && $password == $user1_password, $hash)) {
echo "OK";
}
else {
//Invalid credentials
echo "Error!";
};
*/


/*
if (($user == $user) {
if (password_verify($password == $user1_password)))
echo "OK";
}
else {
//Invalid credentials
echo "Error!";
}
*/

?>
