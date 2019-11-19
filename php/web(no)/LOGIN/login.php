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
//echo "Connected successfully";
// formulariotik bidalitako datuak irakurri
// leer desde el formulario
$user =  $_POST['user'];
$pass = $_POST['pass'];
//
$sql = "SELECT * FROM users WHERE user = '$user';";
//echo $sql . "<br><br>";
//
$result = $conn->query($sql);

if ($result->num_rows > 0){
  $row = $result -> fetch_assoc();
  if ($user == $row["user"]){
    if ($pass == $row["pass"]){
      //echo "OK";
      header("Location: ../NEWS/delete.php");
    } else {
      header("Location: ../hardcore.php");
    }
  } else {
    header("Location: ../hardcore.php");
  }
  } else {
    header("Location: ../hardcore.php");
  }

$conn->close();
?>
