<?php
$socialBg = the_field('join_in_socials_bg_img');
?>
<section style="background-image: url(<?php echo esc_url($socialBg['url']); ?>);"></section>


<section class="border-yellow yellow-doodles-bg">
        <div class="py-5 text-center opac">
            <h1 class="title-medium text-yellow">Join in on the fun</h1>
            <h3 class="text-yellow">Follow us on our socials:</h3>
            <div class="d-flex justify-content-center">
                <a class="social-icons" target="_blank" href="https://www.instagram.com/skateityourself/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/ig-yellow.svg" alt="Instagram"></a>
                <a class="social-icons" target="_blank" href="https://www.facebook.com/SkateItYourself"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/fb-yellow.svg" alt="Facebook"></a>
                <a class="social-icons" target="_blank" href="https://x.com/SkateItYourself"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/twitter-yellow.svg" alt="Twitter/X"></a>
                <a class="social-icons" target="_blank" href="https://www.tiktok.com/@skateityourself"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/TIK-TOK-YELLOW.svg" alt="Tiktok"></a>
            </div>
        </div>
    </section>