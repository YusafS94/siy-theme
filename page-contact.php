<?php get_header(); ?>


<div class="container bg-dark text-light mx-auto my-4">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/siy mouth circular.png" alt="" width="100">
    <h2>Contact us</h2>
    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nihil sapiente praesentium tempore pariatur labore ut blanditiis. Deserunt, quas. Accusamus nostrum perspiciatis tenetur officia voluptatibus incidunt blanditiis facilis, quod praesentium minus, nemo neque.</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4 text-dark">
      <h4 class="d-flex justify-content-between align-items-center mb-3 text-light">
        <span class="">Or drop us a message</span>
        <span class="badge badge-secondary badge-pill">...</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Name</h6>
            <small class="text-muted">Kierhardy Ansell</small>
          </div>
          <span class="text-muted">...</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Email</h6>
            <small class="text-muted">Email@gmail.com</small>
          </div>
          <span class="text-muted">...</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Phone</h6>
            <small class="text-muted">01924 000111</small>
          </div>
          <span class="text-muted">...</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Address</h6>
            <small>123 Brick Lane</small>
          </div>
          <span class="text-success">...</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Hours</span>
          <strong>...</strong>
        </li>
      </ul>

    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Fill in the form</h4>
      <form class="needs-validation" novalidate="">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" name="message" rows="4" cols="50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi ex corrupti necessitatibus exercitationem in est reprehenderit mollitia laboriosam repellendus molestiae.
            </textarea>
          </div>
        </div>
        
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
      </form>
    </div>
  </div>

</div>


<?php get_footer(); ?>