<?php


require "../php/config.php";
    #$row['id']=73;
    #echo md5(md5($row['id'])."password");
#   /n new line
$succesMessage='';

$error="";

if ($_POST) {

  if (!$_POST["email"]) {

      $error .= "Email address is required.<br>";
      }


  if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)== false) {
      $error .= "Email address is invalid<br>";

  }

  if (!$_POST["password"]) {
      $error .= "Password is required.<br>";
      }

  if(isset($_POST['rememberMe'])){

      setcookie('email', $_POST["email"]);
      #var_dump($_COOKIE['email']);
      #var_dump($_POST["email"]);
  } else {

      setcookie('email', $_POST["email"], time()-3600);
  }

  if ($error !="") { #ha hiba van

      $error = '<div class="alert alert-danger" role="alert"> <strong>There was an error: <br></strong>' . $error . '</div>';

    } else { # ha minden jo

      require "../php/mysql.php";
      #var_dump($link);
      $user=mysqli_real_escape_string($link, $_POST['email']);
      $password=$_POST["password"];
      #var_dump($email);
      ###  SIGN UP

      if(isset($_POST['signUp'])){    #ha sing up ot nyomott

          $query = "SELECT id FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
          $result = mysqli_query($link, $query);

          if (mysqli_num_rows($result)>0) { #ha van mar ilyen user
            $error = ("The email address already taken!");
            $error = '<div class="alert alert-danger" role="alert"> <strong>There was an error: <br></strong>' . $error . '</div>';

          } else {  #ha van mar ilyen user else

            $six_digit_random_number = mt_rand(100000, 999999); #random a kodolashoz
            $query = "INSERT INTO `users` (`email`,`password`,`salt`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."','".mysqli_real_escape_string($link, $_POST['password'])."','".$six_digit_random_number."')";
            #$query = "INSERT INTO `users` (`email`,`password`) VALUES ('proba@111.hu','jelszo')";

            if (!mysqli_query($link,$query)) { #nem sikeres signup

              $error = "<p>Could not sign you up - Please try again later.</p>";
              $error = '<div class="alert alert-danger" role="alert"> <strong>There was an error: <br></strong>' . $error . '</div>';

            } else { #nem sikeres signup else
              #aktivalo mail
              $succesMessage = '<div class="alert alert-success" role="alert"> <strong>Signup successful! You will receive the activation link by email shortly.<br></strong></div>';

              $query = "SELECT id FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
              $result = mysqli_query($link, $query);

              if (mysqli_num_rows($result)>0) { #mehet az aktivalo mail

                $row = mysqli_fetch_array($result);
                $id= $row['id'];
                $token = $six_digit_random_number;
                $email = mysqli_real_escape_string($link, $_POST['email'];
                require "../php/new_activation.php";

              } #mehet az aktivalo mail vege

            }#nem sikeres signup else vege
          } #ha van mar ilyen user else  vege
        } ##ha sing up ot nyomott vege

        ### LOGIN

        if(isset($_POST['logIn'])){ # ha logIn van

          $query = "SELECT secure_password,id,first_name,salt FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
          $result = mysqli_query($link, $query);

          if (mysqli_num_rows($result)>0) { #regisztralt felhasznalo

            $row = mysqli_fetch_array($result);

            if ($row[0]=='yes') { #SECURE LOGIN HA AKTIVALT USER
              #var_dump($row);
              #$succesMessage = '<div class="alert alert-success" role="alert"> <strong>'.$row['secure_password'].$row['id'].'<br></strong></div>';

              $id= $row['id'];

              session_start();
              $_SESSION['username']=$row['first_name'];
              $_SESSION['id']=$row['id'];

              #echo $_SESSION['username'];
              header("Location: logging.php");

            }  else {#NINCS SECURE PASSWORD -AKTIVALO mail LINK


              $id= $row['id'];
              $token= $row['salt'];
              $organisation= $row['first_name'];
              $email = mysqli_real_escape_string($link, $_POST['email'];
              #send activation mail
              require "../php/new_activation.php";

              #header("Location: new_activation.php?id=".$id."&email=".$email."&token=".$six_digit_random_number);


            } #aktivalt user vege 1 else ha nem aktivalt
          } else { #nem regisztralt felhasznalo

            $error = ("Not a registered user, please sign up.");
            $error = '<div class="alert alert-danger" role="alert"> <strong>There was an error: <br></strong>' . $error . '</div>';

          } #regisztralt felhasznalo vege 1 else  #nem regisztralt felhasznalo

        } # ha logIn van vege



    } #ha minden jo vege
} #ha van post vege




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

    background: url('../pub/images/login.jpeg') center no-repeat fixed;
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

body {color:yellow;}

.loginDiv{
  // margin-top: 100px;
  background-color: rgba(90, 2, 160, 0.6);
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
      <h1 class="display-3">Festbot Login</h1>
      <div><?php print_r($error.$succesMessage); ?></div>
      <div class="errorMessage"></div>

      <form method="post" class="myLoginValidation">
        <div class="errorMessage"></div>
        <div class="form-group">
          <label for="Email"></label>
          <input type="email" name="email" class="form-control email" id="email" aria-describedby="emailHelp" placeholder="Email address" value="<?php if(isset($_COOKIE['email'])){ print_r($_COOKIE['email']);} ?>">
          <small id="emailHelp" class="form-text text-muted">Registered users, only.</small>
        </div>
        <div class="form-group">
          <label for="Password"></label>
          <input type="password" name="password" class="form-control password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" name="rememberMe" class="form-check-input rememberMe" id="exampleCheck1" checked>
          <label class="form-check-label" for="Check1">Remember me</label>
        </div>
        <br>
        <button type="submit" id="signUp" name="signUp" class="btn btn-secondary">Sign up</button>
        <button type="submit" id="submit" name="logIn" class="btn btn-primary"><i class="fas fa-user"></i> Login</button>
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
      // show the alert
      setTimeout(function() {
          $(".alert").alert('close');
      }, 4000);

      });

    </script>

</body>
</html>
