<?php


require "../php/mysql.php";
require "../php/config.php";
$error='';
$successMessage='';

if (array_key_exists('id',$_GET)) {

  $id= $_GET['id'];
  $token = $_GET['token'];
  $email = $_GET['email'];

  $query = "SELECT password FROM `users` WHERE email='".mysqli_real_escape_string($link, $email)."' LIMIT 1";
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_array($result);
  $password = $row['password'];

  if (mysqli_num_rows($result)>0) {

    $query = "UPDATE users SET password = '".md5(md5($id.$password))."', secure_password = 'yes' WHERE id =".$id." LIMIT 1";
    $result = mysqli_query($link, $query);

    if (mysqli_query($link,$query)) {
      $successMessage = "<p>Activation error - Please try again later.</p>";
      $successMessage = '<div class="alert alert-danger" role="alert"> <strong>There was an error: <br></strong>' . $error . '</div>';

      header("Location: /admin/index.php");

    } else {

      $error = "<p>Activation error - Please try again later.</p>";
      $error = '<div class="alert alert-danger" role="alert"> <strong>There was an error: <br></strong>' . $error . '</div>';


    } #(mysqli_num_rows($result)>0) UPDATE vege

  } #mysqli_num_rows($result)>0 SELECT vege

} #if array key exist end




?>
