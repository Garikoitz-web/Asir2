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
?>

<html>
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<link href='https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC' rel='stylesheet' type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<link href="Logo.ico" type="image/x-icon" rel="shortcut icon">

<title>Borroka Fronte Musikala</title>

</head>
<style>
.newspaper {
  /* Old Chrome, Safari, Opera */
  -webkit-column-count: 3;
  -webkit-column-width: 100px;

  /* Old Firefox */
  -moz-column-count: 3;
  -moz-column-width: 100px;

  /* Statndard syntax */
  column-count: 3;
  column-width: 100px;
}
</style>
<link href="CSS/css.css" rel="stylesheet" type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
<!-- Imagenes que se mueven en el heading -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <img class="d-block w-95" src="img/logo.png" alt="First slide" width="100%">
    </div>
</div>
<a name="home"></a>
        <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">
                  <H2>Borroka Fronte Musikala</H2></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <img src="logo2.ico" width="50" height="50">
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#home">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="LOGIN/login.html">LOGIN</a>
                    </li>
                  </ul>
                </div>
              </nav>
</html>
 <!-- Informacion -->
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
 echo ' <div class="flex-container mt-3 card-deck">';
 $sql = "SELECT * FROM news";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {

       echo '<div class="card btn-dark">';
       echo '<div class="card-body bg-color2 ">';
       echo '<div class="newspaper">';
       echo '<a class="card-title bg-color2 btn-dark">';
       echo '<h5>';
       echo "id: " . $row["id"]. "<br> tittle: " . $row["tittle"]. "<br> info:" . $row["info"];
       echo '</h5>';
       echo '</a>';
       echo "<img  width='100%' alt='Card image cap' src=NEWS/img/" . $row["img"] . "> <br>";
         ?>
              <form action="news-read.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $row["id"]?>">
              </form>

         <?php
         echo '</div>';
         echo '</div>';
      echo '</div>';

     }
 } else {
     echo "0 results";
 }
echo '</div>';
 $conn->close();
 ?>
