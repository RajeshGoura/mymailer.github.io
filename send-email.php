<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Set email recipient
$to = "210301120111@cutm.ac.in";

// Set email subject and message
$email_subject = "New message from $name: $subject";
$email_message = "Name: $name\nEmail: $email\n\n$message";

// Send email
mail($to, $email_subject, $email_message);

// Redirect to thank-you page
header("Location: thank-you.html");
?>
