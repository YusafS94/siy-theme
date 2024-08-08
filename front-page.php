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

<!-- Carousel old -->
   <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="first-slide placeholder-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Orange_Box.jpg" alt="First slide">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="second-slide placeholder-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Orange_Box.jpg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="third-slide placeholder-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Orange_Box.jpg" alt="Third slide">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev bg-dark" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next bg-dark" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> -->

    
  <swiper-container>
    <swiper-slide>
      <div class="custom-card border border-danger">
        <img class="card-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/2.jpg" alt="">
        <h3 class="container border-bottom border-primary p-2 m-0 text-uppercase text-left">Halifax</h3>
        <div class="row m-0 border border-warning">
          <div class="col h-100 border border-primary">
            <p class="">A group skateboard lesson open to all abilities! Hosted at the Wellholme Skatepark. HD6 4AA (Brighouse).</p>
            <p class="">Weather permitting - Alternative session hosted at Orange Box Skatepark if session is cancelled.</p>
          </div>
          <div class="w-25">
            <p class="container text-center border-bottom border-right border-primary w-100">1 hour @ £12.50</p>
            <img class="mid-star w-100 border-right text-center" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/STAR-03.svg" alt="">
          </div>
        </div>
      </div>
    </swiper-slide>

    <swiper-slide>
      <div class="custom-card border border-danger">
        <img class="card-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/2.jpg" alt="">
        <h3 class="container border-bottom border-primary p-2 m-0 text-uppercase text-left">Halifax</h3>
        <div class="row m-0 border border-warning">
          <div class="col h-100 border border-primary">
            <p class="">A group skateboard lesson open to all abilities! Hosted at the Wellholme Skatepark. HD6 4AA (Brighouse).</p>
            <p class="">Weather permitting - Alternative session hosted at Orange Box Skatepark if session is cancelled.</p>
          </div>
          <div class="w-25">
            <p class="container text-center border-bottom border-right border-primary w-100">1 hour @ £12.50</p>
            <img class="mid-star w-100 border-right text-center" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/STAR-03.svg" alt="">
          </div>
        </div>
      </div>
    </swiper-slide>

    <swiper-slide>
      <div class="custom-card border border-danger">
        <img class="card-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/2.jpg" alt="">
        <h3 class="container border-bottom border-primary p-2 m-0 text-uppercase text-left">Halifax</h3>
        <div class="row m-0 border border-warning">
          <div class="col h-100 border border-primary">
            <p class="">A group skateboard lesson open to all abilities! Hosted at the Wellholme Skatepark. HD6 4AA (Brighouse).</p>
            <p class="">Weather permitting - Alternative session hosted at Orange Box Skatepark if session is cancelled.</p>
          </div>
          <div class="w-25">
            <p class="container text-center border-bottom border-right border-primary w-100">1 hour @ £12.50</p>
            <img class="mid-star w-100 border-right text-center" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/STAR-03.svg" alt="">
          </div>
        </div>
      </div>
    </swiper-slide>

    
  </swiper-container>
  <div class="swiper-pagination text-light bg-dark border border-success w-25 p-4"></div>
  <br>
  <div class="swiper-button-prev text-light bg-dark border border-dark w-25 p-4"></div>
  <br>
  <div class="swiper-button-next text-light bg-dark border border-danger w-25 p-4"></div>

  <section class="container">
      <div class="ml-25 carousel-container my-4 overflow-hidden">
        <h2 class="">Pick your location</h2>
        <div class="d-flex border border-dark overflow-hidden">
          <!-- Card 1 -->
          <div class="custom-card border border-danger">
            <img class="card-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/2.jpg" alt="">
            <h3 class="container border-bottom border-primary p-2 m-0 text-uppercase text-left">Halifax</h3>
            <div class="row m-0 border border-warning">
              <div class="col h-100 border border-primary">
                <p class="">A group skateboard lesson open to all abilities! Hosted at the Wellholme Skatepark. HD6 4AA (Brighouse).</p>
                <p class="">Weather permitting - Alternative session hosted at Orange Box Skatepark if session is cancelled.</p>
              </div>
              <div class="w-25">
                <p class="container text-center border-bottom border-right border-primary w-100">1 hour @ £12.50</p>
                <img class="mid-star w-100 border-right text-center" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/STAR-03.svg" alt="">
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="custom-card border border-danger">
            <img class="card-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/2.jpg" alt="">
            <h3 class="container border-bottom border-primary p-2 m-0 text-uppercase text-left">Halifax</h3>
            <div class="row m-0 border border-warning">
              <div class="col h-100 border border-primary">
                <p class="">A group skateboard lesson open to all abilities! Hosted at the Wellholme Skatepark. HD6 4AA (Brighouse).</p>
                <p class="">Weather permitting - Alternative session hosted at Orange Box Skatepark if session is cancelled.</p>
              </div>
              <div class="w-25">
                <p class="container text-center border-bottom border-right border-primary w-100">1 hour @ £12.50</p>
                <img class="mid-star w-100 border-right text-center" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/STAR-03.svg" alt="">
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="custom-card border border-danger">
            <img class="card-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/2.jpg" alt="">
            <h3 class="container border-bottom border-primary p-2 m-0 text-uppercase text-left">Halifax</h3>
            <div class="row m-0 border border-warning">
              <div class="col h-100 border border-primary">
                <p class="">A group skateboard lesson open to all abilities! Hosted at the Wellholme Skatepark. HD6 4AA (Brighouse).</p>
                <p class="">Weather permitting - Alternative session hosted at Orange Box Skatepark if session is cancelled.</p>
              </div>
              <div class="w-25">
                <p class="container text-center border-bottom border-right border-primary w-100">1 hour @ £12.50</p>
                <img class="mid-star w-100 border-right text-center" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/STAR-03.svg" alt="">
              </div>
            </div>
          </div>
        </div>
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