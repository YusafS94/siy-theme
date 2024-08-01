<?php get_header(); ?>


<div class="blog-page">

    <section>
      <div class="content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <br>
                <article>
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                        <p class="post-date"><?php echo get_the_date(); ?></p>
                        <p class="category">in <?php the_category(', '); ?></p>
                        <?php the_excerpt(); ?>
                    </a>
                    <br>
                    <a href="<?php the_permalink(); ?>" class="btn">read more</a>
                </article>
                <br>
                <br>
                <hr>
            <?php endwhile; endif; ?>
      </div>
    </section>
    
</div>


<?php get_footer(); ?>