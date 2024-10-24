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
        $to = 'hardy@skateityourself.com';  // Replace with the recipient email
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
        echo "<p class='text-warning'>Please fill in all required fields with valid information.</p>";
        // echo "<br>";
        // echo "<a href='/contact'>Back to form</a>";
    }
}
?>



<form class="needs-validation mx-1" novalidate="" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="POST">
  <div class="rounded-pill bg-purple border-yellow text-center form-header-outer d-inline-block my-2"><h4 class="text-uppercase font-weight-bold form-header">Send us a message</h4></div>
  <div class="row">
    <div class="col-12 mb-3">
      <label class="text-main font-weight-bold" for="firstName">Name</label>
      <input type="text" class="form-control bg-transparent text-light" id="firstName" name="fullname" placeholder="First & Last Name" value="<?php echo $fullname;?>" required="">
      <span><?php echo $fullnameErrMsg;?></span>
      <div class="invalid-feedback">
        Valid first name is required.
      </div>
    </div>
    <div class="col-12 mb-3">
      <label class="text-main font-weight-bold" for="lastName">Email <span class="text-light-yellow">(required)</span></label>
      <input type="email" class="form-control bg-transparent text-light" id="email" name="email" placeholder="Your email" value="<?php echo $email;?>" required="">
      <span><?php echo $emailErrMsg;?></span>
      <div class="invalid-feedback">
        Valid email is required.
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 mb-3">
      <label class="text-main font-weight-bold" for="message">Message <span class="text-light-yellow">(required)</span></label>
      <textarea class="form-control bg-transparent text-light" id="message" name="message"></textarea>
    </div>
  </div>
  <div class="row justify-content-end">
    <div class="d-inline-block mr-2">
      <button class="btn btn-warning title-button px-3 rounded-pill text-purple" value="" type="submit">Send</button>
    </div>
  </div>
</form>