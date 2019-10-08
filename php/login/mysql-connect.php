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
echo "Connected successfully";


//$sql = "SELECT Name, Password FROM users WHERE Name='' and password=''";
//$result = mysqli_query($sql);

?>
