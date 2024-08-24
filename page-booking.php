<?php get_header(); ?>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="top bg-light rounded-xl border-main_purple d-flex flex-column flex-md-row">
                    <div class="booking-value-prop"><img class="book-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/2.jpg" alt=""></div>
                    <div class="">
                        <h3>Free equipment provided at all sessions</h3>
                        <p>To save your spot and sign up to a lesson weekly <strong>send us a message</strong> or for a 1-1 purchase a package through the link below</p>
                        <button>View Products/Packages</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    


    <section class="paper-bg p-4">
        <div class="container my-4">
            <?php include_partial("booking-glider"); ?>
        </div>
    </section>

    <section>
        <div class="container text-center">
            <h1 class="title-large">Join on the fun</h1>
            <h3>Follow us on our socials:</h3>
        </div>
    </section>

    
    
</main>


<?php get_footer(); ?>