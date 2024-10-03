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
             <div class="card-div">
                <img class="about-img border-purple card-image" src="<?php echo esc_url($halifaxCardImage1['url']); ?>" alt="<?php echo esc_attr($halifaxCardImage1['alt']); ?>">
             </div>
            <div class="">
                <div class="d-flex flex-column align-items-center text-center">
                    <p class="text-purple"><?php the_field('halifax_card_1_pricing'); ?></p>
                    <h4 class="text-purple"><?php the_field('halifax_card_1_title'); ?></h4>
                    <p class="text-purple"><?php the_field('halifax_card_1_description_1'); ?></p>
                    <p class="text-purple"><?php the_field('halifax_card_1_description_2'); ?></p>
                    <a target="_blank" href="<?php the_field('halifax_card_1_url'); ?>" class="btn btn-warning rounded-pill py-2 px-4">Book</a>
                </div>
            </div>
        </li>

        <li class="glide__slide">
            <!-- Card 2 -->
             <div class="card-div">
                <img class="about-img border-purple card-image" src="<?php echo esc_url($halifaxCardImage2['url']); ?>" alt="<?php echo esc_attr($halifaxCardImage2['alt']); ?>">
             </div>
            <div class="">
                <div class="d-flex flex-column align-items-center text-center">
                    <p class="text-purple"><?php the_field('halifax_card_2_pricing'); ?></p>
                    <h4 class="text-purple"><?php the_field('halifax_card_2_title'); ?></h4>
                    <p class="text-purple"><?php the_field('halifax_card_2_description_1'); ?></p>
                    <p class="text-purple"><?php the_field('halifax_card_2_description_2'); ?></p>
                    <a target="_blank" href="<?php the_field('halifax_card_2_url'); ?>" class="btn btn-warning rounded-pill py-2 px-4">Book</a>
                </div>
            </div>
        </li>

        <li class="glide__slide">
            <!-- Card 3 -->
             <div class="card-div">
                <img class="about-img border-purple card-image" src="<?php echo esc_url($halifaxCardImage3['url']); ?>" alt="<?php echo esc_attr($halifaxCardImage3['alt']); ?>">
             </div>
            <div class="">
                <div class="d-flex flex-column align-items-center text-center">
                    <p class="text-purple"><?php the_field('halifax_card_3_pricing'); ?></p>
                    <h4 class="text-purple"><?php the_field('halifax_card_3_title'); ?></h4>
                    <p class="text-purple"><?php the_field('halifax_card_3_description_1'); ?></p>
                    <p class="text-purple"><?php the_field('halifax_card_3_description_2'); ?></p>
                    <a target="_blank" href="<?php the_field('halifax_card_3_url'); ?>" class="btn btn-warning rounded-pill py-2 px-4">Book</a>
                </div>
            </div>
        </li>

        <li class="glide__slide">
            <!-- Card 4 -->
             <div class="card-div">
                <img class="about-img border-purple card-image" src="<?php echo esc_url($halifaxCardImage4['url']); ?>" alt="<?php echo esc_attr($halifaxCardImage4['alt']); ?>">
             </div>
            <div class="">
                <div class="d-flex flex-column align-items-center text-center">
                    <p class="text-purple"><?php the_field('halifax_card_4_pricing'); ?></p>
                    <h4 class="text-purple"><?php the_field('halifax_card_4_title'); ?></h4>
                    <p class="text-purple"><?php the_field('halifax_card_4_description_1'); ?></p>
                    <p class="text-purple"><?php the_field('halifax_card_4_description_2'); ?></p>
                    <a target="_blank" href="<?php the_field('halifax_card_4_url'); ?>" class="btn btn-warning rounded-pill py-2 px-4">Book</a>
                </div>
            </div>
        </li>
      </ul>
    </div>
    <div class="glide__arrows justify-content-end" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left bg-warning" id="custom-left-arrow" data-glide-dir="<"><i class="fa fa-arrow-left"></i></button>
        <button class="glide__arrow glide__arrow--right bg-warning" id="custom-right-arrow" data-glide-dir=">"><i class="fa fa-arrow-right"></i></button>
    </div>
  <!-- <div class="glide__bullets bg-warning" data-glide-el="controls[nav]">
    <button class="glide__bullet" data-glide-dir="=0"></button>
    <button class="glide__bullet" data-glide-dir="=1"></button>
    <button class="glide__bullet" data-glide-dir="=2"></button>
  </div> -->
</div>