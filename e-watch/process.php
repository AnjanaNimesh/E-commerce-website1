<?php

//If this work, please Verify your "SMTP" and "smtp_port" setting in php.ini


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $message = $_POST["message"];
    $to = "e-watch.gmail.com";
    $headers = "From $email";
    if(mail($to,$message,$headers)){
        echo"Email send";
    }
    else{
        echo "not send";
    }
}
?>