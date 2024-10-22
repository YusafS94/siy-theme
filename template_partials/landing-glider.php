<?php 
$landingCardImage1 = get_field('landing_card_1_img');
$landingCardImage2 = get_field('landing_card_2_img');
$landingCardImage3 = get_field('landing_card_3_img');
?>
<div class="glide container">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">      

        <li class="glide__slide">
            <!-- Card 1 -->
          <div class="custom-card-test bg-yellow">
            <div class="card-div w-100 border border-dark">
            <img class="card-image" src="<?php echo esc_url($landingCardImage3['url']); ?>" alt="<?php echo esc_attr($landingCardImage3['alt']); ?>">
            </div>
            <div class="card-rounded-container w-100">
              <h3 class="container border-bottom-purple p-2 pl-4 m-0 text-uppercase text-start text-purple">Halifax</h3>
              <div class="d-flex flex-column flex-md-row card-lower-row">
                <div class="w-50 text-center order-md-2 align-self-center">
                  <img class="card-star" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/STAR-small.svg" alt="">
                </div>
                <div class="w-100 p-4 pt-md-2 pb-md-5 border-right-purple">
                  <p class="text-purple"><?php the_field('landing_card_1_description_1'); ?></p>
                  <p class="text-purple"><?php the_field('landing_card_1_description_2'); ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center mt-2"><a href="/halifax" class="btn btn-light bg-yellow border-purple rounded-pill py-2 px-4 text-purple title-nav">View Page &nbsp; <i class="fa fa-arrow-right arrow-rotate"></i></a></div>
        </li>

        <li class="glide__slide">
            <!-- Card 2 -->
          <div class="custom-card-test bg-yellow">
            <div class="card-div w-100 border border-dark">
            <img class="card-image" src="<?php echo esc_url($landingCardImage3['url']); ?>" alt="<?php echo esc_attr($landingCardImage3['alt']); ?>">
            </div>
            <div class="card-rounded-container w-100">
              <h3 class="container border-bottom-purple p-2 pl-4 m-0 text-uppercase text-start text-purple">Huddersfield</h3>
              <div class="d-flex flex-column flex-md-row card-lower-row">
                <div class="w-50 text-center order-md-2 align-self-center">
                  <img class="card-star" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/STAR-small.svg" alt="">
                </div>
                <div class="w-100 p-4 pt-md-2 pb-md-5 border-right-purple">
                  <p class="text-purple"><?php the_field('landing_card_1_description_1'); ?></p>
                  <p class="text-purple"><?php the_field('landing_card_1_description_2'); ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center mt-2"><a href="/huddersfield" class="btn btn-light bg-yellow border-purple rounded-pill py-2 px-4 text-purple title-nav">View Page &nbsp; <i class="fa fa-arrow-right arrow-rotate"></i></a></div>
        </li>

        <li class="glide__slide">
            <!-- Card 3 -->
          <div class="custom-card-test bg-yellow">
            <div class="card-div w-100 border border-dark">
            <img class="card-image" src="<?php echo esc_url($landingCardImage3['url']); ?>" alt="<?php echo esc_attr($landingCardImage3['alt']); ?>">
            </div>
            <div class="card-rounded-container w-100">
              <h3 class="container border-bottom-purple p-2 pl-4 m-0 text-uppercase text-start text-purple">Castleford</h3>
              <div class="d-flex flex-column flex-md-row card-lower-row">
                <div class="w-50 text-center order-md-2 align-self-center">
                  <img class="card-star" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/STAR-small.svg" alt="">
                </div>
                <div class="w-100 p-4 pt-md-2 pb-md-5 border-right-purple">
                  <p class="text-purple"><?php the_field('landing_card_1_description_1'); ?></p>
                  <p class="text-purple"><?php the_field('landing_card_1_description_2'); ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center mt-2"><a href="/castleford" class="btn btn-light bg-yellow border-purple rounded-pill py-2 px-4 text-purple title-nav">View Page &nbsp; <i class="fa fa-arrow-right arrow-rotate"></i></a></div>
        </li>
        
      </ul>
    </div>

    <div class="glide__arrows justify-content-end" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left bg-yellow" id="custom-left-arrow" data-glide-dir="<"><i class="fa fa-arrow-left text-purple"></i></button>
        <button class="glide__arrow glide__arrow--right bg-yellow" id="custom-right-arrow" data-glide-dir=">"><i class="fa fa-arrow-right text-purple"></i></button>
    </div>
    <!-- <div class="glide__bullets bg-warning" data-glide-el="controls[nav]">
      <button class="glide__bullet" data-glide-dir="=0"></button>
      <button class="glide__bullet" data-glide-dir="=1"></button>
      <button class="glide__bullet" data-glide-dir="=2"></button>
    </div> -->
</div>