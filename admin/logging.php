<?php

session_start();

if (array_key_exists('id', $_COOKIE)) { #ha keep me logged in

  $_SESSION['id'] = $_COOKIE['id'];

} #ha keep me logged in VEGE

if (array_key_exists('id', $_SESSION)) {#be van jelentkezve

  echo "Logged in!  <a href='../admin/index.php?logout=1'>Log out</a>";

  /*

  SECURE AREA!!

  DashBOARD PHP code coming here

  */

} else {#be van jelentkezve ELSE

  header ('Location: ../admin/index.php');

} #be van jelentkezve ELSE END
















 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Festbot Dashboard</title>
  </head>
  <body>
    Welcome

  </body>
</html>
