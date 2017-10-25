<?php

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $emailTo = "akinlekan@gmail.com";
    $subject = "Contact Us Page";

    $body .= "Name: ";
    $body .= $name;
    $body .= "\n";

    $body .= "Email: ";
    $body .= $email;
    $body .= "\n";

    $body .= "Message: ";
    $body .= $message;
    $body .= "\n";

    $success = mail($emailTo, $subject, $body, "From:" .$email);

    if($success){
        echo "Success";
    } else {
        echo "Error";
    }

?>