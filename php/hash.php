<?php

// https://www.sitepoint.com/hashing-passwords-php-5-5-password-hashing-api/
$pass = 'p1';
$hash = password_hash($pass, PASSWORD_DEFAULT);
echo $hash;

//$hash = '$2y$10$/yhoaDf2YOLwOHBZdjwApe7lim.8zQqOGahzJzwe3xxi5jhDBw4JS';
$hash = '';
echo $hash . '<br>';

if (password_verify($pass, $hash)) {
  //Success!
echo "Success!";
}
else {
  //Invalid credentials
  echo "Error!";
}
?>
