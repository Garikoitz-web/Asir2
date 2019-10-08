<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
//echo "<br>";



//leer desde el formulario
$User = $_POST['User'];
$Password = $_POST['Password'];


$sql = "SELECT * FROM users WHERE User = '$User';";
//echo $sql . "<br><br>";
//
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($User == $row["User"]){
        if (password_verify($password, $row["Pass"])) {
            echo "OK";
        } else{
            echo "KO";
        }
    } else {
        echo "KO";
    }
} else {
    echo "KO";
}
$conn->close();
?>
