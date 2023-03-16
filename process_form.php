<?php
// Set the recipient email address
$to = 'amyhoanganhjohnson@gmail.com';

// Call the phpinfo() function to display information about the PHP installation
phpinfo();

// Check if the mail() function is enabled
if (function_exists('mail')) {
    echo 'The mail() function is enabled on this server.';
} else {
    echo 'The mail() function is not enabled on this server.';
}


// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Build the email message
$subject = 'New Contact Form Submission';
$body = "Name: $name\nEmail: $email\nMessage: $message";

// Send the email
$headers = "From: $email\r\nReply-To: $email\r\n";
mail($to, $subject, $body, $headers);

// Redirect the user to a thank you page
header('Location: thank_you.html');
exit;
?>
