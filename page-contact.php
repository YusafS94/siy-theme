<?php get_header(); ?>
<main>

  <div class="contact-title-bg">
    <h1 class="title-medium text-main">Get in contact with us</h1>
  </div>

  <div class="container mx-auto my-4">
    <div class="d-flex flex-column flex-lg-row">
      <div class="w-100">
        <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/2.jpg" alt="">
      </div>
      <div class="w-100">
        <form class="needs-validation" novalidate="">
          <div class="row">
            <div class="col-12 mb-3">
              <label class="text-main" for="firstName">Name</label>
              <input type="text" class="form-control bg-transparent" id="firstName" placeholder="First & Last Name" value="" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-12 mb-3">
              <label class="text-main" for="lastName">Email (required)</label>
              <input type="email" class="form-control bg-transparent" id="email" placeholder="Your email" value="" required="">
              <div class="invalid-feedback">
                Valid email is required.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 mb-3">
              <label class="text-main" for="message">Message (required)</label>
              <textarea class="form-control bg-transparent" id="message" name="message">
              </textarea>
            </div>
          </div>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <div class="container mx-auto my-4 paper-bg">
    <div class="d-flex flex-column flex-lg-row">
      <div class="w-100">
        <div><p class="text-alt">hardy@skateityourself.com <i class="fa fa-envelope"></i></p></div>
        <div><p class="text-alt">07711085906 <i class="fa fa-phone"></i></p></div>
        <div><p class="text-alt">1 Blackledge, Halifax </p></div>
        <div><p class="text-alt">HX1 1AF </p></div>
      </div>
      <div class="w-100">
        <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/2.jpg" alt="">
      </div>
    </div>
  </div>

  <section>
        <div class="container text-center contact-title-bg">
            <h1 class="title-medium text-main">Join on the fun</h1>
            <h3 class="text-main">Follow us on our socials:</h3>
        </div>
    </section>

  </main>

<?php get_footer(); ?>