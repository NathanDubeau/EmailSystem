<?php
$to = "nate@gmail.com";
$subject = "Testing my Email";
$message = "This is a test email to see if my code executes and works like i hope.";
$sender_email = "nathan@mail.com";
$sender_name = "Nate";

// Set additional headers
$headers = "From: $sender_name <$sender_email>\r\n";
$headers .= "Reply-To: $sender_name <$sender_email>\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
