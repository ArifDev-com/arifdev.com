<?php

if(isset($_POST['message'])) 
{

    $to = "imdarif122@gmail.com,contact@arifdev.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    
    mail($to, $subject, $message, $headers);
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
header('Location: /thank-you.html');
exit();
