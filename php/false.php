<html>
  <body>

    <form action="index.php" method="GET">
      Name:
      <br>
      <input type="text" name="user" value="koxme">
      <br>
      Password:
      <br>
      <input type="password" name="password" value="p1">
      <br>
      <br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
<?php

    //definir los datos
    if (isset($_GET["Submit"])){
      $user1 = $_GET["user"];
      $user1_password = $_GET["password"];
      echo "It is a correct account";
    }

?>
