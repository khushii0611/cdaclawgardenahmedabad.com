<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data safely
    $name    = htmlspecialchars($_POST['author']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['comment']);

    // Your email
    $to = "info@cdaclawgardenahmedabad.com";

    // Email subject
    $email_subject = "New Contact Form Submission: " . $subject;

    // Email body
    $email_body = "You have received a new message:\n\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Phone: $phone\n".
                  "Subject: $subject\n\n".
                  "Message:\n$message";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Failed to send message.'); window.history.back();</script>";
    }
}
?>