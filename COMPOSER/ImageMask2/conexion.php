<?php


$mysqli = new mysqli("localhost", "root", "", "imagemask");

if($mysqli->connect_errno) {
	echo "Falló la conexion a la base de datos";
}

return $mysqli;


/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "imagemask";
// Create connection
$mysqli = new mysqli($servername, $username, $password ,$dbname);
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
*/
?>
