<?php


     $link = mysqli_connect(
        "localhost",
        "takacspeter_fest",
        "sriny9gDsk",
        "takacspeter_festbot" #database name
    );

    if (mysqli_connect_error() =="") {
           #echo "Connection: Succesful!" ;
    } else {
            die("There was an error!");
    }


?>
