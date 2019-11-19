<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//
$id = $_POST["id"];
$tittle = $_POST["tittle"];
$info = $_POST["info"];
$img = $_POST["img"];

$sql = "UPDATE news SET tittle='$tittle', info='$info', img='$img' WHERE id='$id';";
$result = $conn->query($sql);
if ($result === TRUE){
  header("Location: delete-from.php");
} else {
  header("Location: ../hardcore.php");
}
$conn->close();
?>
