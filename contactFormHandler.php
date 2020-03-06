<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];


        $mailTo = "contact@stephenouldhouse.com";
        $headers = "From: ".$email;
        $txt = "You have recieved an email from ".$name.".\n\n".$message;

        // create mail function
        mail($mailTo, $txt, $headers);
        header("Location: index.html")
        
    }

?>