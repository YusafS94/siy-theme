<?php get_header(); ?>
<main>
<?php
$contactAreaImg = get_field('contact_area_image');
?>

  <div class="contact-title-bg">
    <h1 class="title-medium text-main">Get in contact with us!</h1>
  </div>

  <div class="mx-auto checker-bg">
    <div class="opac">
      <div class="d-flex flex-column flex-lg-row container my-5 p-0 rounded-lg border-yellow">
        <div class="w-100 form-img-container">
          <img class="w-100 form-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/contact-form-img-resized.jpg" alt="">
        </div>
        <div class="w-100 px-4 py-2">
        <?php include_partial("contact-form"); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="paper-bg">
    <div class="d-flex flex-column flex-lg-row">
      <div class="w-50">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/SPRAY-PAINT-DOODLE.svg" alt="">
      </div>
      <div class="w-100 text-right px-2">
        <div class="w-50 rounded-pill bg-purple border-yellow px-0 mt-3 text-center ml-auto"><h4 class="text-uppercase">Contact Info</h4></div>
        <div class="pt-3">
          <p class="text-alt"><a href="mailto:<?php echo get_field('contact_info_email'); ?>"><?php echo get_field('contact_info_email'); ?></a> <i class="fa fa-envelope"></i></p>
          <p class="text-alt"><a href="tel:<?php echo get_field('contact_info_tel'); ?>"><?php echo get_field('contact_info_tel'); ?></a> <i class="fa fa-phone"></i></p>
        </div>
        <div class="pt-3">
          <p class="text-alt"><a target="_blank" href="http://maps.google.com/?q=1%20Blackledge%20Halifax"><?php echo get_field('contact_info_address'); ?></a></p>
          <p class="text-alt"><?php echo get_field('contact_info_postcode'); ?></p>
        </div>
      </div>
      <div class="w-100">
        <img class="w-100" src="<?php echo esc_url($contactAreaImg['url']); ?>" alt="<?php echo esc_attr($contactAreaImg['alt']); ?>">
      </div>
    </div>
  </div>

 

  <?php include_partial("social-cta"); ?>

  </main>

<?php get_footer(); ?>