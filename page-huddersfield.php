<?php get_header(); ?>

<main class="main">

    <?php include_partial("booking-header"); ?>

    <section id="huddersfield-glider-section" class="paper-bg p-4">
        <div class="bg-purple text-yellow rounded-pill px-4 container py-2 schedule-title-div">
            <h4 class="text-uppercase m-0">I would like to <strong>schedule</strong>...</h4>
        </div>
        <div class="my-4">
            <?php include_partial("huddersfield-booking-glider"); ?>
        </div>
    </section>

    <?php include_partial("social-cta"); ?>

    
    
</main>


<?php get_footer(); ?>