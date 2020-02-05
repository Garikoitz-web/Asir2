<?php
session_start();
if(!isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
  header("Location: index2.php");
}

include "functions.php";
?>

<!DOCTYPE html>
<html lang="es">  
  <head>    
  <link href="img/icons/ico.ico" type="image/x-icon" rel="shortcut icon">

<title>ImageMask</title>
    <meta charset="UTF-8">
    <meta name="title" content="ImageMask">
    <meta name="description" content="ImageMask">    
    <link href="css/stylee.css" rel="stylesheet" type="text/css"/>  
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  </head>   
  <body>   

  	<?php

  		require "conexion.php";

  		$sqlA = $mysqli->query("SELECT * FROM users WHERE id = '".$_SESSION['id']."'");
  		$rowA = $sqlA->fetch_array();

  	?>

<?php include "header.php"; ?>

<div class="h-content">

	<div class="e-mid">

		<div class="e-left">
			<a href="editar_perfil.php"><button class="button_edit_on">Edit profile</button></a>
			<a href="editar_pass.php"><button class="button_edit">Change password</button></a> 
		</div>

		<form action="" method="post">

			<?php
			if(isset($_POST['editar'])) {
				require "conexion.php";

				$nombre = $mysqli->real_escape_string($_POST['nombre']);
				$username = $mysqli->real_escape_string($_POST['username']);
				$bio = $mysqli->real_escape_string($_POST['bio']);
				$email = $mysqli->real_escape_string($_POST['email']);

				$sqlB = $mysqli->query("SELECT * FROM users WHERE username = '$username' AND id != '".$_SESSION['id']."'");
				$totalusuarios = $sqlB->num_rows;

				$sqlC = $mysqli->query("SELECT * FROM users WHERE email = '$email' AND id != '".$_SESSION['id']."'");
				$totalemail = $sqlC->num_rows;

				if($totalusuarios > 0) {$existe = "Ya hay un usuario con este nombre";} 

				elseif ($totalemail > 0) {$existe2 = "Ya hay un email registrado";} else  {

				$sqlE = $mysqli->query("UPDATE users SET name = '$nombre', username = '$username', bio = '$bio', email = '$email' WHERE id = '".$_SESSION['id']."'");

				if($sqlE) {header('Location: editar_perfil.php');}

			}
			}
			?>

		<div class="e-right">
			<div class="e-contenido">
				<div class="e-title"><img src="images/<?php echo $rowA['avatar']; ?>" width="60"></div>
				<div class="e-input"><?php echo $rowA['username']; ?><br><p>Cambiar foto de perfil</p></div>
			</div>
			<div class="e-contenido">
				<div class="e-title">Nombre</div>
				<div class="e-input"><input type="text" name="nombre" value="<?php echo $rowA['name']; ?>" autocomplete="off">
				</div>
			</div>
			<div class="e-contenido">
				<div class="e-title">Nombre de usuario</div>
				<div class="e-input"><input type="text" name="username" value="<?php echo $rowA['username']; ?>" autocomplete="off">
					<br> <div style="color:red; font-size: 12px;"><?php if(isset($existe)) {echo $existe;} ?></div></div>
			</div>
			<div class="e-contenido">
				<div class="e-title">Biografía</div>
				<div class="e-input"><input type="text" name="bio" value="<?php echo $rowA['bio']; ?>" autocomplete="off"></div>
			</div>
			<div class="e-contenido">
				<div class="e-title">Correo electrónico</div>
				<div class="e-input"><input type="text" name="email" value="<?php echo $rowA['email']; ?>" autocomplete="off">
					<br> <div style="color:red; font-size: 12px;"><?php if(isset($existe2)) {echo $existe2;} ?></div></div>
			</div>
			<div class="e-contenido">
				<div class="e-title"></div>
				<div class="e-but">
					<input type="submit" value="Editar" name="editar" class="button_blue" style="margin-left: 110px; margin-bottom: 30px; color: white; font-size: 16px; padding:6px 9px;font-weight: 600;">
				</div>
			</div>

		</form>



		</div>

	</div>

</div>

  </body>  
</html>