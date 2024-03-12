<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "pxu2@wpi.edu";
    $subject = "New Contact Form Submission";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);

    // Redirect to a thank-you page or display a success message
    header("Location: thank_you.html");
    exit();
}
?>