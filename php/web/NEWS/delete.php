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
$sql = "DELETE FROM news WHERE id=$id";
$result = $conn->query($sql);
header("Location: delete-from.php");
?>
