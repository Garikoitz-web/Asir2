<?php
ob_start();
?>
<?php
session_start();
if(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE) {
  header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<link href="img/icons/ico.ico" type="image/x-icon" rel="shortcut icon">

<title>ImageMask</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
  <link rel="stylesheet" href="css/stylee.css" type="text/css">
</head>

<body>

  <div id="wrapper">

    <div class="w-left"><img src="img/celulares.png" width='100%'></div>

    <div class="w-right">

      <?php
      if(isset($_GET['error'])) {
        echo "<center>Error user or password is not OK</center>";
      }
      ?>

      <?php
      if(isset($_POST['entrar'])) {

        require("conexion.php");

        $username = $mysqli->real_escape_string($_POST['usuario']);
        $password = md5($_POST['password']);

        $consulta = "SELECT username, password, id FROM users WHERE username = '$username' AND password = '$password'";

        if($resultado = $mysqli->query($consulta)) {
          while($row = $resultado->fetch_array()) {

            $userok = $row['username'];
            $passok = $row['password'];
            $id = $row['id'];
          }
          $resultado->close();
        }
        $mysqli->close();


        if(isset($username) && isset($password)) {

          if($username == $userok && $password == $passok) {

            session_start();
            $_SESSION['logueado'] = TRUE;
            $_SESSION['username'] = $userok;
            $_SESSION['id'] = $id;
            header("Location: home.php");

          }

          else {

            Header("Location: index2.php?error=login");

          }

        }


      }
      ?>

      <div class="main-content">
        <div class="header">
          <img src="img/logo.png">
        </div>
        <div class="l-part">
          <form action="" method="post">
            <input type="text" placeholder="UserName" class="input" name="usuario" autocomplete="off" />
            <div class="overlap-text">
              <input type="password" placeholder="Password" class="input" name="password" />
            </div>
            <input type="submit" class="btn" name="entrar" value="login"/>
          </form>
          <br>
          <div class="s-part">
          <a href="registro.php">
          <input type="submit" class="btn" name="entrar" value="Sign Up"/>
          </a>
        </div>
        </div>
      </div>

      <div class="sub-content">
        
      </div>

    </div>

  </div>

</body>
</html>
<?php
ob_end_flush();
?>
