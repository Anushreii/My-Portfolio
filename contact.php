<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $to = 'anushreev813@gmail.com'; // Your email address
    $from = 'From: Parax Contact Form <no-reply@yourdomain.com>'; // Adjust the sender email as needed
    $body = "You have received a new message from your website contact form.\n\n" .
            "Here are the details:\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Subject: $subject\n" .
            "Message:\n$message\n\n" .
            "This message was sent on " . date('Y-m-d H:i:s');

    if (mail($to, $subject, $body, $from)) {
        header("Location: thank-you.html");
    } else {
        echo "Error sending email!";
    }
}
?>
