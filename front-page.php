<?php get_header();?>

<?php 
$landingHero = get_field('home_page_hero_image');
?>

<main role="main">

  <section class="hero-section">
      <div class="">
          <img class="hero-img" src="<?php echo esc_url($landingHero['url']); ?>" alt="<?php echo esc_attr($landingHero['alt']); ?>">
      </div>
  </section>

  <section class="checker-bg">
    <div class="container opac">
      <!-- <div class="title-bg">
        <h1 class="title-large text-main">Skateboarding <br> in Yorkshire</h1>
      </div> -->
      <div class="d-flex flex-column flex-lg-row border-yellow mx-auto">
        <div class="about-left-col">
          <div class="stroke-alt text-main main-title-div">
            <h2 class="title-medium text-main">Award Winning</h2>
            <h3 class="title-small text-main">Skateboarding</h3>
            <h2 class="title-medium text-main">Company</h2>
          </div>
          <?php include_partial("scrolling-text"); ?>
          <div class="border-yellow text-center my-2 bg-alt rounded-xl our-mission-card">
            <h3 class="title-underlines title-xs py-3">Our mission</h3>
            <p class="px-4 py-2"><?php echo get_field('our_mission_paragraph_1'); ?></p>
            <p class="px-4 py-2"><?php echo get_field('our_mission_paragraph_2'); ?></p>
          </div>
        </div>
        <div class="about-right-col d-flex flex-column">
          <div class="about-card about-top order-2 order-lg-1 bg-alt rounded-xl border-main">
            <h3 class="title-underlines title-xs m-0 py-3">About us</h3>
            <div class="d-flex">
              <div class="about-star-container"><img class="about-star" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/yellow-star.svg" alt=""></div>
              <div class="">
              <p class="px-4 py-2"><?php echo get_field('about_us_paragraph_1'); ?></p> 
              <p class="px-4 py-2"><?php echo get_field('about_us_paragraph_2'); ?></p>
              </div>
            </div>
          </div>
          <div class="about-bottom order-1 order-lg-2 m-2">
            <img class="about-img rounded-lg" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/home-about-resized.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="locations" class="container">
      <div class="ml-25 carousel-container my-4 overflow-hidden">
        <div class="rounded-pill border-yellow bg-purple py-2 px-4 mb-3">
          <h2 class="title-small">Pick a location</h2>
        </div>
        <?php include_partial("landing-glider"); ?>
      </div>
  </section>


  <section class="paper-bg py-5">
    <div class="container bg-purple border-yellow rounded-pill py-2 px-4 mb-3 review-div">
      <h2 class="title-small m-0">Reviews</h2>
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

<?php get_footer();?>