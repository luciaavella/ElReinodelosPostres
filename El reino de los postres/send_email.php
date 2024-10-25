<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "luciaperezavella@gmail.com";  // Update to your email
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    $email_body = "Name: $name\nEmail: $email\nMessage:\n$message\n";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "Thank you for your message. It has been sent.";
    } else {
        echo "Sorry, there was a problem sending your message.";
    }
} else {
    echo "Invalid request.";
}
?>
