<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $fullname = sanitize_text_field($_POST['fullname']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validate required fields
    if (!empty($fullname) && !empty($email) && !empty($message) && is_email($email)) {

        // Email content
        $to = 'yusafsaddiq@gmail.com';  // Replace with the recipient email
        $subject = 'New Contact Form Submission';
        $body = "Name: $fullname\n";
        $body .= "Email: $email\n";
        $body .= "Message:\n$message\n";
        $headers = array('Content-Type: text/plain; charset=UTF-8');

        // Send email using wp_mail
        if (wp_mail($to, $subject, $body, $headers)) {
            echo "Email sent successfully.";
            echo "<br>";
            echo "<a href='/contact'>Back to site</a>";
        } else {
            echo "Email sending failed.";
        }
    } else {
        echo "Please fill in all required fields with valid information.";
        echo "<br>";
        echo "<a href='/contact'>Back to form</a>";
    }
}
?>
