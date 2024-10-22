<?php 
$halifaxCardImage1 = get_field('halifax_card_1_img');
$halifaxCardImage2 = get_field('halifax_card_2_img');
$halifaxCardImage3 = get_field('halifax_card_3_img');
$halifaxCardImage4 = get_field('halifax_card_4_img');
?>

<div class="glide container">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">

        <li class="glide__slide">
                <!-- Card 1 -->
                <div class="booking-card-outer">
                    <div class="booking-card-img-div border-purple">
                        <img class="booking-card-img" src="<?php echo esc_url($halifaxCardImage1['url']); ?>" alt="<?php echo esc_attr($halifaxCardImage1['alt']); ?>">
                    </div>
                    <div class="booking-card-lower d-flex flex-column flex-lg-row">
                        <div class="text-center align-self-center">
                            <img class="card-star" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/STAR-small.svg" alt="">
                        </div>
                        <div class="d-flex flex-column align-items-start text-left">
                            <p class="mt-2 mt-lg-4 text-purple font-weight-bold"><?php the_field('halifax_card_1_pricing'); ?></p>
                            <h4 class="text-purple booking-card-title"><?php the_field('halifax_card_1_title'); ?></h4>
                            <p class="text-purple"><?php the_field('halifax_card_1_description_1'); ?></p>
                            <p class="text-purple"><?php the_field('halifax_card_1_description_2'); ?></p>
                            <a target="_blank" href="<?php the_field('halifax_card_1_url'); ?>" class="btn btn-warning rounded-pill py-2 px-4 title-button text-purple">Book &nbsp; <i class="fa fa-arrow-right arrow-rotate"></i></a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="glide__slide">
                <!-- Card 2 -->
                <div class="booking-card-outer">
                    <div class="booking-card-img-div border-purple">
                        <img class="booking-card-img" src="<?php echo esc_url($halifaxCardImage2['url']); ?>" alt="<?php echo esc_attr($halifaxCardImage2['alt']); ?>">
                    </div>
                    <div class="booking-card-lower d-flex flex-column flex-lg-row">
                        <div class="text-center align-self-center">
                            <img class="card-star" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/STAR-small.svg" alt="">
                        </div>
                        <div class="d-flex flex-column align-items-start text-left">
                            <p class="mt-2 mt-lg-4 text-purple font-weight-bold"><?php the_field('halifax_card_2_pricing'); ?></p>
                            <h4 class="text-purple booking-card-title"><?php the_field('halifax_card_2_title'); ?></h4>
                            <p class="text-purple"><?php the_field('halifax_card_2_description_1'); ?></p>
                            <p class="text-purple"><?php the_field('halifax_card_2_description_2'); ?></p>
                            <a target="_blank" href="<?php the_field('halifax_card_2_url'); ?>" class="btn btn-warning rounded-pill py-2 px-4 title-button text-purple">Book &nbsp; <i class="fa fa-arrow-right arrow-rotate"></i></a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="glide__slide">
                <!-- Card 3 -->
                <div class="booking-card-outer">
                    <div class="booking-card-img-div border-purple">
                        <img class="booking-card-img" src="<?php echo esc_url($halifaxCardImage3['url']); ?>" alt="<?php echo esc_attr($halifaxCardImage3['alt']); ?>">
                    </div>
                    <div class="booking-card-lower d-flex flex-column flex-lg-row">
                        <div class="text-center align-self-center">
                            <img class="card-star" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/STAR-small.svg" alt="">
                        </div>
                        <div class="d-flex flex-column align-items-start text-left">
                            <p class="mt-2 mt-lg-4 text-purple font-weight-bold"><?php the_field('halifax_card_3_pricing'); ?></p>
                            <h4 class="text-purple booking-card-title"><?php the_field('halifax_card_3_title'); ?></h4>
                            <p class="text-purple"><?php the_field('halifax_card_3_description_1'); ?></p>
                            <p class="text-purple"><?php the_field('halifax_card_3_description_2'); ?></p>
                            <a target="_blank" href="<?php the_field('halifax_card_3_url'); ?>" class="btn btn-warning rounded-pill py-2 px-4 title-button text-purple">Book &nbsp; <i class="fa fa-arrow-right arrow-rotate"></i></a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="glide__slide">
                <!-- Card 4 -->
                <div class="booking-card-outer">
                    <div class="booking-card-img-div border-purple">
                        <img class="booking-card-img" src="<?php echo esc_url($halifaxCardImage4['url']); ?>" alt="<?php echo esc_attr($halifaxCardImage4['alt']); ?>">
                    </div>
                    <div class="booking-card-lower d-flex flex-column flex-lg-row">
                        <div class="text-center align-self-center">
                            <img class="card-star" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/STAR-small.svg" alt="">
                        </div>
                        <div class="d-flex flex-column align-items-start text-left">
                            <p class="mt-2 mt-lg-4 text-purple font-weight-bold"><?php the_field('halifax_card_4_pricing'); ?></p>
                            <h4 class="text-purple booking-card-title"><?php the_field('halifax_card_4_title'); ?></h4>
                            <p class="text-purple"><?php the_field('halifax_card_4_description_1'); ?></p>
                            <p class="text-purple"><?php the_field('halifax_card_4_description_2'); ?></p>
                            <a target="_blank" href="<?php the_field('halifax_card_4_url'); ?>" class="btn btn-warning rounded-pill py-2 px-4 title-button text-purple">Book &nbsp; <i class="fa fa-arrow-right arrow-rotate"></i></a>
                        </div>
                    </div>
                </div>
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