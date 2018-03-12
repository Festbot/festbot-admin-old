<?php

session_start();

#$_SESSION['username']="szofon";

echo $_SESSION['username'];

if ($_SESSION['email'] == '') {
    header("Location: login.php");
} else {
    echo $_SESSION['email'];
}

?>


