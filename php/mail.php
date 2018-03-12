<?
$error="";
$successMessage = "";
if ($_POST) {



    if (!$_POST["email"]) {
        $error .= "Email address is required.<br>";

    }


   # if (preg_match('/[^a-z0-9.#$-,.=+_!?]/i', $_POST["notes"])) {
   #   $error .= "Notes: Please use only the following characters a-z, A-Z, 0-9, #, -, . <br>";
   #   };

    if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)== false) {
      $error .= "Email address is invalid.<br>";

    }

    if ($error !="") {

        $error = '<div class="alert alert-danger" role="alert"> <strong>There was an error: <br></strong>' . $error . '</div>';

    } else {

      $emailTo ="info@festbot.com";
      $subject ="Enterprise Application";
      $content ="Visitors ".$_POST['visitors']."<br>"."Event number ".$_POST['eventNumber']."<br>"."Kind Of ".$_POST['kindOf']."<br>"."Notes: ".$_POST['notes']."<br>";
      $headers = "From: ".$_POST["email"];

      if (mail($emailTo, $subject, $content, $headers )) {

        $successMessage = '<div class="alert alert-success" role="alert"> <strong>Your form has been submitted, thank you!<br></strong></div>';

      } else {
          $error = '<div class="alert alert-danger" role="alert"> <strong>Your message could\'t be sent, Please trey again later. <br></strong></div>';
      }
    }
 }


?>
