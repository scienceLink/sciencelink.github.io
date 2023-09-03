<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $subject = $_POST["Subject"];
    $message = $_POST["Message"];
    
    // Replace with your actual email address
    $to = "costpetrides@icloud.com";
    
    // Create email headers
    $headers = "From: $email";
    
    // Construct the email message
    $mail_body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";
    
    // Send the email
    if (mail($to, $subject, $mail_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message delivery failed.";
    }
} else {
    // Handle cases where the form is not submitted properly
    echo "Form submission error.";
}
?> 
