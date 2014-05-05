<?php
 $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Demo'; 
    $to = 'fahadsyed1995@gmail.com'; 
    $subject = 'Hello';
    $submit = $_POST['submit'];
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";


if ($submit) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Try again!</p>'; 
    }
}
?>