<?php get_header();?>


<main role="main">

  <section class="hero-section">
      <div class="">
          <img alt="hero" class="hero-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/hero-img.jpg" />
      </div>
  </section>

 

  <section>
    <div class="container opac">
      <div class="title-bg">
        <h1 class="title-large text-main_purple">Skateboarding <br> in Yorkshire</h1>
      </div>
      <div class="row container border border-dark mx-auto">
        <div class="col border-right border-dark">
          <div class="stroke-main_purple">
            <h2 class="title-medium text-light">Award Winning</h2>
            <h3 class="title-small text-light">Skateboarding</h3>
            <h2 class="title-medium text-light">Company</h2>
          </div>
          <div class="row border-top border-bottom border-dark title-xxs text-main_purple scroll-outer">
            <div class="scroll-inner d-flex align-items-center">
              <p class="d-inline">More than a club </p>
              <img class="small-star" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/STAR-03.svg" alt="">
              <p>More than a club</p>
              <img class="small-star" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/STAR-03.svg" alt="">
              <p>More than a club</p>
            </div>
          </div>
          <div class="border border-dark text-center my-2 bg-light rounded-xl p-4">
            <h3 class="border-bottom border-dark title-xs">Our mission</h3>
            <p>We aim to be more than a club but instead a community of skateboarders!</p>
            <p>By joining us you'll be introduced to the whole of skateboarding and make new friends along the way!</p>
          </div>
        </div>
        <div class="col">
          <div class="top bg-light rounded-xl p-4 m-4 border-main_purple ">
            <h3 class="border-bottom border-dark title-xs">About us</h3>
            <div class="row">
              <div class="col border-right border-dark"><img class="about-star" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/STAR-03.svg" alt=""></div>
              <div class="col">
                <p>We run and operate the Orange Box skatepark <strong>based in the heart of Halifax</strong></p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <img class="about-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/2.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="container">
      <div class="ml-25 carousel-container my-4 overflow-hidden">
        <h2 class="">Pick your location</h2>
        <?php include_partial("glider"); ?>
      </div>
  </section>


  <section class="reviews-section py-5">
    <div class="container bg-light">
      <h2 class="title-small">Reviews</h2>
    </div>
    <div class="container">
  <div class="row">
    <div class="col bg-light border border-dark my-2 p-4 rounded-xl">
      <p>"<strong>Absolutely brilliant</strong> under 7s club on Monday evenings. I can't recommend it enough."</p>
    </div>
    <div class="col"></div>
  </div>
  <div class="row">
    <div class="col"></div>
    <div class="col bg-light border border-dark my-2 p-4 rounded-xl">
      <p>"Hardy is a legend - the kids all love, <strong>trust</strong> and <strong>respect</strong> him."</p>
    </div>
  </div>
  <div class="row">
    <div class="col bg-light border border-dark my-2 p-4 rounded-xl">
      <p>"My son has been part of the Skate It Yourself community for over 2 years now and has made some <strong>life long friends</strong> in the other kids and the coaches. All the <strong>coaches are amazing</strong>."</p>
    </div>
    <div class="col"></div>
  </div>
</div>
  </section>

</main>

<?php get_footer();?>