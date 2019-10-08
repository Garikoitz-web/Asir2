<?php
 require 'conexion.php';

 $user =  $_POST['user'];
 $password = $_POST['password'];

$insertar = "INSERT INTO clientes VALUES ('$user','$password') ";

$query = mysqli_query($conectar, $insertar);

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


?>
