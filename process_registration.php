<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect user data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $dateOfBirth = $_POST["date_of_birth"];
    $gamingPlatform = $_POST["gaming_platform"];

    // Email settings
    $to = "teach.ryan33@gmail.com"; // Replace with your email address
    $subject = "New Registration";



    // Compose the email message
    $message = "New user registration:\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Date of Birth: $dateOfBirth\n";
    $message .= "Gaming Platform: $gamingPlatform\n";

    // Send the email
    $headers = "From: teach.ryan@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo '<h2>Registration Successful</h2>';
        echo '<p>Thank you for registering. You will receive an email confirmation shortly.</p>';
    } else {
        // Email not sent
        echo '<h2>Registration Failed</h2>';
        echo '<p>There was an issue processing your registration. Please try again. Be sure to confirm your information is correct.</p>';
    }

    // Additional manual steps:
    // 1. Manually create user accounts on the target site.
    // 2. Set passwords or communicate login instructions to users.
    // 3. Notify users about their accounts.
}
?>
