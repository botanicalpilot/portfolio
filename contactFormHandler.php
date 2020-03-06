<?php
    $name = $_POST['name'];
    $sender_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'contact@stephenouldhouse.com';

    $email_subject = "Contact from stephenouldhouse.com";

    $email_body = "Name:  $name.\n". "email: $sender_email.\n". "Message: $message.";

    $to = "smo244@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers) or die("Error");

    echo "Thank You!";
    // header("Location: index.html");

?>