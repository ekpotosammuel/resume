<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "ekpotosammuel1@gmail.com";
    $email_subject = "new submission";
    $email_body = "User Name: $name.\n".
                        "User Email: $email.\n".
                            "User Message: $message.\n";
    $to = "ekpotosammuel1@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers = "Reply-To: $email \r\n";
    mail($to, $email_subject, $email_body);
    header("location: contact\contact.blade.php");

?>