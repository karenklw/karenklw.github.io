<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "karenkailunwang@gmail.com";
    $subject = "[karenklw.github.io] New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\n$message";

    mail($to, $subject, $body);

    header("Location: thank_you.html");
    exit;
}
?>
