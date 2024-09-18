<?php
$validForm = true;
$email = "";
$emailErrMsg = "";
$fullname = "";
$fullnameErrMsg = "";

if(isset($_POST["submit"])){

  if(empty($_POST["email"])){
    $validForm = false;
    $emailErrMsg = "You need to enter an email address";
  }else{
    $email = $_POST["email"];
  }

  if(empty($_POST["fullname"])){
    $validForm = false;
    $fullnameErrMsg = "You need to enter full name";
  }else{
    $fullname = $_POST["fullname"];
  }
}
?>

<?php
if(isset($_POST["submit"])){
  if($validForm){
    //we have passed all the tests so we can display the form data
    echo "<p> Valid form.</p>";
    echo "<p> You entered an email address of {$email}.</p>";
    echo "<p> You entered a fullname of {$fullname}.</p>";
    echo "</body>";
    echo "</html>";
    exit;
  }
}
?>


<form class="needs-validation mx-1" novalidate="" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
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