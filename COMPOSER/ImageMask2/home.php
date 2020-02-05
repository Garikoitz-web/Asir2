<?php
session_start();
if(isset($_SESSION['logueado']) && $_SESSION['logueado'] == FALSE) {
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
    <link href="css/gram.css" rel="stylesheet" type="text/css"/>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  </head>
  <body>

<?php
require("conexion.php");

$consultaA = "SELECT confirmed FROM users WHERE username = '".$_SESSION['username']."'";
$resultadoA = $mysqli->query($consultaA);
$row = $resultadoA->fetch_array();

if($row['confirmed'] == 0) {
	echo "<div class='topbarc'><a href='codigo.php'>Confirma tu email aquí </a></div>";
}

$mysqli->close();
?>

<?php include "header.php"; ?>

<div class="h-content">
	<div class="h-left">

		<?php
		require "conexion.php";

		$sqlA = $mysqli->query("SELECT * FROM publicaciones ORDER BY id DESC");
		while($rowA = $sqlA->fetch_array()) {
			$sqlB = $mysqli->query("SELECT * FROM users WHERE id = '".$rowA['user']."'");
				$rowB = $sqlB->fetch_array();
			$sqlC = $mysqli->query("SELECT * FROM archivos WHERE publicacion = '".$rowA['id']."'");
				$rowC = $sqlC->fetch_array();

		?>

			<div class="hl-cont">
				<div class="hl-top">
					<div class="hl-username">
						<div class="hl-name">
						<center>
						<a href="perfil.php?username=<?php echo $rowB['username'];?>"><?php echo $rowB['username']; ?></a>
						</center>
						</div>
					</div>
				</div>
				<div class="hl-middle">
					<img src="archivos/<?php echo $rowC['ruta']; ?>" width="100%" class="<?php echo $rowC['filtro']; ?>">
				</div>
				<div class="hl-bottom">
					<strong style="color: #262626;"><?php echo $rowB['username']; ?></strong> <?php echo $rowA['descripcion']; ?>
				</div>
			</div>

		<?php } ?>

	</div>


	<div class="h-right">

		<div class="hl-menu">
			<div class="hl-icon"><a href="subir.php"><img src="img/icons/mas.png" width="50" title ="Sube una foto ó video" ></a></div>
		</div>
		<div class="hr-top">
				<div class="hr-username">
					<div class="hr-name"><a href="perfil.php?username=<?php echo $_SESSION['username'];?>"><?php echo $_SESSION['username'];?></a></div>
				<div class="hr-nombre"><?php datos_usuario($_SESSION['id'],'name'); ?></div>
			</div>
		</div>
	</div>
</div>



  </body>
</html>
