<?php get_header(); ?>

<main class="main">
    <section class="checker-bg py-5">
        <div class="container">
            <div class="bg-purple rounded-xl border-main d-flex flex-column flex-md-row">
                <div class="booking-value-prop-img w-100"><img class="book-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/2.jpg" alt=""></div>
                <div class="w-25 m-auto"><img class="book-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/yellow-star.svg" alt=""></div>
                <div class="w-100">
                    <h3 class="px-5 pt-3 text-yellow">Free equipment provided at all sessions</h3>
                    <p class="px-5 pt-3 text-yellow">To save your spot and sign up to a lesson weekly <strong>send us a message</strong> or for a 1-1 purchase a package through the link below</p>
                    <a href="#castleford-glider-section" class="btn btn-warning rounded-pill mx-5 mt-3 py-2 px-4">View Products/Packages <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    


    <section id="castleford-glider-section" class="paper-bg p-4">
        <div class="my-4">
            <?php include_partial("castleford-booking-glider"); ?>
        </div>
    </section>

    <section class="py-5">
        <div class="container text-center opac">
            <h1 class="title-medium text-yellow">Join on the fun</h1>
            <h3 class="text-yellow">Follow us on our socials:</h3>
            <div class="d-flex justify-content-center">
                <a class="social-icons" target="_blank" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/ig-yellow.svg" alt=""></a>
                <a class="social-icons" target="_blank" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/fb-yellow.svg" alt=""></a>
                <a class="social-icons" target="_blank" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/twitter-yellow.svg" alt=""></a>
            </div>
        </div>
    </section>

    
    
</main>


<?php get_footer(); ?>