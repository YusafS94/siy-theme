<?php
$validForm = true;
$email = "";
$emailErrMsg = "";
$fullname = "";
$fullnameErrMsg = "";

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
            // echo "<br>";
            // echo "<a href='/contact'>Back to site</a>";
        } else {
            echo "Email sending failed.";
        }
    } else {
        echo "Please fill in all required fields with valid information.";
        // echo "<br>";
        // echo "<a href='/contact'>Back to form</a>";
    }
}
?>



<form class="needs-validation mx-1" novalidate="" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="POST">
  <div class="row">
    <div class="col-12 mb-3">
      <label class="text-main" for="firstName">Name</label>
      <input type="text" class="form-control bg-transparent text-light" id="firstName" name="fullname" placeholder="First & Last Name" value="<?php echo $fullname;?>" required="">
      <span><?php echo $fullnameErrMsg;?></span>
      <div class="invalid-feedback">
        Valid first name is required.
      </div>
    </div>
    <div class="col-12 mb-3">
      <label class="text-main" for="lastName">Email (required)</label>
      <input type="email" class="form-control bg-transparent text-light" id="email" name="email" placeholder="Your email" value="<?php echo $email;?>" required="">
      <span><?php echo $emailErrMsg;?></span>
      <div class="invalid-feedback">
        Valid email is required.
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 mb-3">
      <label class="text-main" for="message">Message (required)</label>
      <textarea class="form-control bg-transparent text-light" id="message" name="message"></textarea>
    </div>
  </div>
  <hr class="mb-4">
  <input type="submit" value="Submit the form" name="submit">
  <button class="btn btn-primary btn-lg btn-block" value="" type="submit">Submit</button>
</form>