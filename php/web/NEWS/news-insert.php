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
$tittle = $_POST['tittle'];
$info = $_POST['info'];
$img = $_POST['img'];
//
$sql = "INSERT INTO news (tittle, info, img) VALUES ('$tittle','$info','$img');";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "<br> tittle: " . $row["tittle"]. "<br> info:" . $row["info"]. "<br> <img width='20%' src=img/" . $row["img"] . "> <br><hr/>";
    }
} else {
    echo "0 results";
}
$conn->close();

if ($result === TRUE){
  header("Location: delete-from.php");
} else {
  header("Location: hardcore.php");
}
?>
