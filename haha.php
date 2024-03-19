<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    
        $to = "example@gmail.com";
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage: $message";
    
        if (mail($to, $subject, $body)) {
            echo "Message sent successfully. We will get back to you soon!";
        } else {
            echo "Oops! Something went wrong. Please try again.";
        }
    }
    ?>