<?php get_header();?>

<?php 
$landingHero = get_field('home_page_hero_image');
$landingAboutImg = get_field('home_page_about_img');
?>

<main role="main">

  <section class="hero-section">
      <div class="">
          <img class="hero-img" src="<?php echo esc_url($landingHero['url']); ?>" alt="<?php echo esc_attr($landingHero['alt']); ?>">
      </div>
  </section>

  <section class="centre-img checker-bg">
    <div class="container opac p-4">
      <!-- <div class="title-bg">
        <h1 class="title-large text-main">Skateboarding <br> in Yorkshire</h1>
      </div> -->
      <div class="d-flex flex-column flex-lg-row border-yellow mx-auto">
        <div class="about-left-col">
          <div class="stroke-alt text-main main-title-div">
            <h2 class="title-large text-main outline-purple">Award Winning</h2>
            <h3 class="title-alt text-main outline-purple">Skateboarding</h3>
            <h2 class="title-large text-main outline-purple">Company</h2>
          </div>
          <?php include_partial("scrolling-text"); ?>
          <div class="border-yellow text-center m-4 bg-alt rounded-xl our-mission-card">
            <h3 class="title-underlines title-xs py-3">Our mission</h3>
            <p class="px-4 py-2"><?php echo get_field('our_mission_paragraph_1'); ?></p>
            <p class="px-4 py-2"><?php echo get_field('our_mission_paragraph_2'); ?></p>
          </div>
        </div>
        <div class="about-right-col d-flex flex-column">
          <div class="about-card about-top order-2 order-lg-1 bg-alt rounded-xl border-main ml-4 mr-4 mt-4 mb-4 mb-lg-0">
            <h3 class="title-underlines title-xs-alt m-0 py-3">About us</h3>
            <div class="d-flex flex-column flex-md-row">
              <div class="about-star-container d-flex justify-content-center"><img class="about-star" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/yellow-star.svg" alt=""></div>
              <div class="d-flex flex-column text-center">
                <p class="px-4 py-2"><?php echo get_field('about_us_paragraph_1'); ?></p> 
                <p class="px-4 py-2"><?php echo get_field('about_us_paragraph_2'); ?></p>
              </div>
            </div>
          </div>
          <div class="about-bottom order-1 order-lg-2 p-4">
            <img class="about-img rounded-lg" src="<?php echo esc_url($landingAboutImg['url']); ?>" alt="<?php echo esc_attr($landingAboutImg['alt']); ?>">
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="locations" class="container">
      <div class="ml-25 carousel-container my-4 overflow-hidden">
        <div class="rounded-pill border-yellow bg-purple py-2 px-4 mb-3">
          <h2 class="">Pick a location:</h2>
        </div>
        <?php include_partial("landing-glider"); ?>
      </div>
  </section>


  <section class="paper-bg py-5">
    <div class="container bg-purple border-yellow rounded-pill py-2 px-4 mb-3 review-div">
      <h2 class="text-uppercase font-weight-bold">Reviews</h2>
    </div>
    <div class="container px-5">
      <div class="row">
        <div class="col-12 col-lg-6 bg-yellow border-purple my-2 p-4 rounded-xl">
          <p class="text-purple"><?php echo get_field('review_1'); ?></p>
        </div>
        <div class="col"></div>
      </div>
      <div class="row">
        <div class="col"></div>
        <div class="col-12 col-lg-6 bg-yellow border-purple my-2 p-4 rounded-xl">
          <p class="text-purple"><?php echo the_field('review_2'); ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-6 bg-yellow border-purple my-2 p-4 rounded-xl">
          <p class="text-purple"><?php echo the_field('review_3'); ?></p>
        </div>
        <div class="col"></div>
      </div>
    </div>
  </section>

</main>

<footer class="checker-bg p-5 mx-auto">
  <div class="row border-main bg-purple rounded-xl">
    <div class="col-12 col-lg-4 p-0 d-flex align-self-center justify-content-center order-2 order-lg-1">
      <a target="_blank" href="<?php echo esc_attr( get_field('footer_mail_button') ); ?>" class="btn btn-warning stretched-link rounded-pill py-2 px-4">Join mailing list</a>
    </div>
    <div class="col-12 col-lg-4 p-0 footer-center order-1 order-lg-2">
      <div><h3 class="title-underlines p-2 text-center">Days of skate</h3></div>
      <div class="d-flex flex-row justify-content-center align-items-center"><p class=""><?php echo get_field('days_of_skate'); ?></p></div>
    </div>
    <div class="col-12 col-lg-4 p-0 order-3">
      <div><h3 class="title-underlines py-2 text-center">Contact</h3></div>
      <div class="d-flex flex-column align-items-center">
        <p><?php echo get_field('contact_email'); ?></p>
        <p><?php echo get_field('contact_phone'); ?></p>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>

<script>
  new Glide('.glide', {
    type:"slider",
    perView: 2,
    breakpoints: {
      1000: {
        perView: 1,
      }
    },
  }).mount()
</script>
</body>

</html>
