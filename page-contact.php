<?php get_header(); ?>
<main>

  <div class="contact-title-bg">
    <h1 class="title-medium text-main">Get in contact with us</h1>
  </div>

  <div class="mx-auto checker-bg">
    <div class="opac">
      <div class="d-flex flex-column flex-lg-row container my-5 rounded-lg border-yellow">
        <div class="w-100">
          <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/contact-form-img-resized.jpg" alt="">
        </div>
        <div class="w-100">
          <form class="needs-validation mx-1" novalidate="">
            <div class="row">
              <div class="col-12 mb-3">
                <label class="text-main" for="firstName">Name</label>
                <input type="text" class="form-control bg-transparent text-light" id="firstName" placeholder="First & Last Name" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-12 mb-3">
                <label class="text-main" for="lastName">Email (required)</label>
                <input type="email" class="form-control bg-transparent text-light" id="email" placeholder="Your email" value="" required="">
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
            <button class="btn btn-primary btn-lg btn-block" mailto="email@email.com" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="paper-bg">
    <div class="d-flex flex-column flex-lg-row">
      <div class="w-50">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/SPRAY-PAINT-DOODLE.svg" alt="">
      </div>
      <div class="w-100 text-right px-2">
        <div class="w-50 rounded-pill bg-purple border-yellow px-0 mt-3 text-center ml-auto"><h4 class="text-uppercase">Contact Info</h4></div>
        <div class="pt-3">
          <p class="text-alt">hardy@skateityourself.com <i class="fa fa-envelope"></i></p>
          <p class="text-alt">07711085906 <i class="fa fa-phone"></i></p>
        </div>
        <div class="pt-3">
          <p class="text-alt">1 Blackledge, Halifax</p>
          <p class="text-alt">HX1 1AF </p>
        </div>
      </div>
      <div class="w-100">
        <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/2.jpg" alt="">
      </div>
    </div>
  </div>

  <?php include_partial("social-cta"); ?>

  </main>

<?php get_footer(); ?>