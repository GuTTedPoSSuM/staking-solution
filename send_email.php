<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "guttedpossum@gmail.com";
    $subject = "New Message from GPSS Contact Form";
    $headers = "From: " . $email;

    // Send the email
    mail($to, $subject, $message, $headers);

    // Confirm success to the user
    echo "Message sent successfully!";
}
?>
