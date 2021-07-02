<?php
    $name = $_POST['name'];
    $visitot_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'ahmedyeamin05@gmail.com';
    $email_subject = 'New From Submissio';
    
    $email_body = "User name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "subject: $subject.\n".
                    "User Message: $message.\n";
    
                    
     $to = 'mdyeamin309@gmail.com';
     
     $headers = "From: $email_from \r\n";

     $headers = "Reply-To: $visitor_email \r\n";

     mail($to,$email_subject,$email_body,$headers);
    
     header ("location: contact.html");




?>