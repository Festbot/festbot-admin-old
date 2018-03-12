<?php

#adatbazist nyitni kell elotte es !!!! kell egy form ami meghivja
#
#


    require 'mysql.php';



    if (array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {

          if($_POST['email'] == '') {

          echo "<p>email address required</p>";

        } else if ($_POST['password'] == '') {

          echo "<p>password address required</p>";

        }  else {
          $query ="SELECT id FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";

          $result = mysqli_query($link, $query);

          if (mysqli_num_rows($result) >0 ) {
                echo "<p>email address taken</p>";
          } else {

            $query ="INSERT INTO `users` (`email`,`password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."','".mysqli_real_escape_string($link, $_POST['password'])."')";

            if  (mysqli_query($link, $query)) {
                echo "<p>You have been signed up!</p>";
            } else {
                echo "<p>There was a problem, please contact. </p>";
            }



          }


        }

    }


?>


