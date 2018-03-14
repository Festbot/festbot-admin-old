<?php

    #$row['id']=73;
    #echo md5(md5($row['id'])."password");
#   /n new line


require "../php/config.php";
$succesMessage ='';
$error='';

$id = $_GET["id"];
$email = $_GET["email"];
























    #$query ="INSERT INTO users (email,password) VALUES('wkr@joajd.com','24radfw')";


   #$query ="UPDATE users SET password ='45tYUHG' WHERE email ='peter_takacs@hotmail.com' LIMIT 1";

   #$query ="UPDATE users SET password ='88888' WHERE email LIKE '%hotmail.com' LIMIT 1";

   #$result = mysqli_query($link, $query); #parancs megnyitas

    #  $email="info@sziget.com";
   # $email= mysqli_real_escape_string($link, $email);

   #$query = "SELECT * FROM users WHERE email='powkr@joajd.com'";
   #$query = "SELECT * FROM users WHERE email LIKE '%com%'";
   #$query = "SELECT * FROM users WHERE id >=  2";
   #$query = "SELECT * FROM users WHERE id >= 2 AND email LIKE '%com%'";
   #$query = "SELECT * FROM users WHERE email ='".mysqli_real_escape_string($link, $email)."'";
   #$query = "SELECT email FROM users";
   #
   #



  # if ($result = mysqli_query($link, $query)) {

  #      while($row = mysqli_fetch_array($result)) {

  #          print_r($row);
  #      }

  # } else {
  #      echo "not";

  # }


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Festbot Login</title>

    <!-- Bootstrap core CSS -->
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

<style type="text/css">


body {

    background: url('/pub/images/login.jpeg') center no-repeat fixed;
    text-align: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;

    }

h1{
  color:white;
  margin:20px;

}

form em{
  font-size: 0.8rem;
}



.loginDiv{
  // margin-top: 100px;
  background-color: rgba(110, 2, 2, 0.6);
  /* background-color: rgba(90, 2, 160, 0.6); lila */
  border-radius: 10px;
  padding:20px;

}

.vertical-center {
  min-height: 100%;  /* Fallbk fodddr browsers do NOT support vh unit */
  min-height: 100vh; /* These two lines are counted as one :-)       */

  display: flex;
  align-items: center;
}

.form-check-label{
  color: #dddddd;
}

</style>
</head>
<body>



  <div class="container mx-auto vertical-center">
    <div class="container loginDiv col-md-8">
      <h1 class="display-3">Secure Password</h1>
      <div class="errorMessage">
        <?php echo $error.$succesMessage ?>
      </div>

      <form method="post" class="myPasswordConfirmation">
        <div class="errorMessage"></div>
        <div class="form-group">
          <label for="Email"></label>
          <input type="email" name="email" class="form-control email" id="email" aria-describedby="emailHelp" placeholder="<?php echo $email;?>" disabled>

        </div>
        <div class="form-group">
          <label for="Password"></label>
          <input type="password" name="password1" class="form-control password" id="newPassword1" placeholder="Enter your password">
        </div>
        <div class="form-group">
          <label for="Password" for="inputSuccess"></label>
          <input type="password" name="password2" class="form-control password" id="newPassword2" placeholder="Re-enter your password" >
        </div>
        <br>
        <button type="submit" id="submit" name="passwordConfirmation" class="btn btn-danger"><i class="fas fa-key"></i> Confirm</button>
      </form>
    </div>
  </div>










   <!-- Bootstrap core JavaScript

    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/assets/js/vendor/popper.min.js"></script>
    <script src="/dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/vendor/holder.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="/js/custom/login_validation.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script>

    //notification bar close on relodad
      $(document).ready(function() {
        $(".alert").alert('close');
      // show the alert
      setTimeout(function() {

          $(".errorMessage").empty();

      }, 4000);

      });

    </script>

</body>
</html>
