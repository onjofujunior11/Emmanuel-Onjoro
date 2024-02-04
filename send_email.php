<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $subject = test_input($_POST["subject"]);
    $message = test_input($_POST["message"]);

    // Send email to emmanuelonjoro@gmail.com
    $to = "emmanuelonjoro@gmail.com";
    $headers = "From: $email";
    $mail_subject = "New message from $name: $subject";
    $message_body = "Name: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";
    mail($to, $mail_subject, $message_body, $headers);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
