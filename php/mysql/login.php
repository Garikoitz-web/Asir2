<?php
// definir los datos
$user1 = "koxme";
$user1_password = '$2y$10$BInjbHHE4czJLgw0G8W3MOTJDCngHXn4nvyymoSJqsVvcqa7aUXW.$2y$10$0oQAjTeZJA93WT6p.Xqp8ODf5DYtFMFIDxdkk50ZX01FBmErsg6sW';
// hash("p1")
//$user2 = "peru";
//$user2_password = "p2";
// leer desde el formulario
$user =  $_POST['user'];
$password = $_POST['password'];
if ($user == $user1){
    if (password_verify($password, $user1_password)) {
        echo "OK";
    } else{
        echo "KO";
    }
} else if ($user == $user2){
    if (password_verify($password2, $user2_password2)) {
        echo "OK";
    } else{
        echo "KO";
    }
} else {
    echo "KO";
}





// Create connection
$conn = new mysqli($user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Name, Password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
