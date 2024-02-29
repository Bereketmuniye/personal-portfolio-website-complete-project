<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = "bereketmuniye4@gmail.com";

    // Set the email subject
    $email_subject = "New Contact Form Submission: $subject";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message: $message\n";

    // Set the email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $email_subject, $email_message, $headers)) {
        // Email sent successfully
        echo "Thank you for your message. We'll get back to you soon!";
    } else {
        // Failed to send email
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>