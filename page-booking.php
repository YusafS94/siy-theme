<?php get_header(); ?>

<main class="main">
    <div class="container">
                <div class="bg-light rounded-xl border-main d-flex flex-column flex-md-row">
                    <div class="booking-value-prop-img w-100"><img class="book-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/2.jpg" alt=""></div>
                    <div class="w-25 m-auto"><img class="book-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/STAR-03.svg" alt=""></div>
                    <div class="w-100">
                        <h3 class="px-5 pt-3">Free equipment provided at all sessions</h3>
                        <p class="px-5 pt-3">To save your spot and sign up to a lesson weekly <strong>send us a message</strong> or for a 1-1 purchase a package through the link below</p>
                        <a href="/" class="btn btn-warning rounded-pill mx-5 mt-3 py-2 px-4">View Products/Packages <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
    </div>

    


    <section class="paper-bg p-4">
        <div class="my-4">
            <?php include_partial("booking-glider"); ?>
        </div>
    </section>

    <section>
        <div class="container text-center">
            <h1 class="title-large text-main">Join on the fun</h1>
            <h3 class="text-main">Follow us on our socials:</h3>
        </div>
    </section>

    
    
</main>


<?php get_footer(); ?>