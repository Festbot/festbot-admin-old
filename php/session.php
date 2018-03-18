<?php
session_start();
if (array_key_exists('id', $_COOKIE)) { #ha keep me logged in

  $_SESSION['id'] = $_COOKIE['id'];

} #ha keep me logged in VEGE

if (array_key_exists('id', $_SESSION)) {#be van jelentkezve

  echo "

    <div class='ui container'>
  
      <div class='ui container right aligned'>Welcome Peter!
        <a href='../admin/index.php?logout=1'>
          <div class='ui basic button'>Log out</div>
        </a>
      </div>
    </div>
  ";

  /*

  SECURE AREA!!

  DashBOARD PHP code coming here

  */

} else {#be van jelentkezve ELSE

  header ('Location: ../admin/index.php');

} #be van jelentkezve ELSE END


 ?>
