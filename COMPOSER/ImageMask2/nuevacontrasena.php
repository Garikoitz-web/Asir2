<!DOCTYPE html>
<html lang="es">
<head>
  <link href="img/icons/ico.ico" type="image/x-icon" rel="shortcut icon">

<title>ImageMask</title>
    <meta charset="UTF-8">
    <meta name="title" content="ImageMask">
    <meta name="description" content="ImageMask">
    <link href="css/stylee.css" rel="stylesheet" type="text/css"/>
    <link href="css/gram.css" rel="stylesheet" type="text/css"/>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  </head>
  <body>

  <?php
  if(isset($_GET['user']) AND isset($_GET['token'])) {

    require "conexion.php";

    $user = $mysqli->real_escape_string($_GET['user']);
    $token = $mysqli->real_escape_string($_GET['token']);

    $sql = $mysqli->query("SELECT token FROM users WHERE username = '$user'");
    $row = $sql->fetch_array();

    if($row['token'] ==  $token) {
  ?>

<div id="wrapper">

  <?php
  if(isset($_POST['codigo'])) {
    require "conexion.php";

    $contrasena = $mysqli->real_escape_string($_POST['contrasena']);
    $contrasena = md5($contrasena);

    $act = $mysqli->query("UPDATE users SET password = '$contrasena', token = '' WHERE username = '$user'");

    if($act) {
      echo "Su contraseña se ha cambiado, ya puede ingresar";
      Header("Refresh: 0; URL=index2.php");
      }
  }
  ?>


  <div class="main-content">
    <div class="header">
      <img src="images/logo.png" />
    </div>
    <form action="" method="post">
      <div class="l-part">
        <input type="text" placeholder="Ingresa tu nueva contraseña" class="input" name="contrasena" required />
        <input type="submit" value="Cambiar contraseña" class="btn" name="codigo" />
      </div>
    </form>
  </div>

</div>

</body>
<?php } } ?>
</html>
