<?php get_header(); ?>


<div class="post-page">

    <section>
        <div class="content">
            <!-- Wysiwug Start -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif;?>
            <!--- Wysiwug Editor END -->
        </div>
    </section>

</div>


<?php get_footer(); ?>