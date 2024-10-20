<?php get_header(); ?>
<main>
<?php
$contactAreaImg = get_field('contact_area_image');
?>

  <div class="contact-title-bg">
    <h1 class="title-medium text-main">Get in contact with us!</h1>
  </div>

  <section class="mx-auto checker-bg centre-img">
    <div class="opac py-5">
      <div class="d-flex flex-column flex-lg-row container p-0 rounded-xl bg-purple border-yellow form-inner-section">
        <div class="w-100 form-img-container p-3 p-lg-0">
          <img class="w-100 form-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/contact-form-img-resized.jpg" alt="">
        </div>
        <div class="w-100 px-4 py-2">
        <?php include_partial("contact-form"); ?>
        </div>
      </div>
    </div>
</section>

  <div class="paper-bg">
    <div class="d-flex flex-column flex-lg-row">
      <div class="w-50">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/SPRAY-PAINT-DOODLE.svg" alt="">
      </div>
      <div class="w-100 text-right px-2">
        <div class="rounded-pill bg-purple border-yellow px-0 mt-3 text-center ml-auto contact-info-header-outer d-inline-block"><h4 class="text-uppercase font-weight-bold contact-info-header">Contact Info</h4></div>
        <div class="pt-3">
          <p class="text-alt"><a class="contact-links" href="mailto:<?php echo get_field('contact_info_email'); ?>"><?php echo get_field('contact_info_email'); ?></a> <i class="fa fa-envelope"></i></p>
          <p class="text-alt"><a class="contact-links" href="tel:<?php echo get_field('contact_info_tel'); ?>"><?php echo get_field('contact_info_tel'); ?></a> <i class="fa fa-phone"></i></p>
        </div>
        <div class="pt-3">
          <p class="text-alt"><a class="contact-links" target="_blank" href="http://maps.google.com/?q=1%20Blackledge%20Halifax"><?php echo get_field('contact_info_address'); ?></a></p>
          <p class="text-alt"><?php echo get_field('contact_info_postcode'); ?></p>
        </div>
      </div>
      <div class="w-100">
        <img class="w-100 contact-area-img" src="<?php echo esc_url($contactAreaImg['url']); ?>" alt="<?php echo esc_attr($contactAreaImg['alt']); ?>">
      </div>
    </div>
  </div>

 

  <?php include_partial("social-cta"); ?>

  </main>

  <footer class="checker-bg p-5 mx-auto">
    <div class="row border-main bg-purple rounded-xl">
      <div class="col-12 col-lg-4 p-0 d-flex align-self-center justify-content-center order-2 order-lg-1">
        <a target="_blank" href="<?php echo esc_attr( get_field('footer_mail_button') ); ?>" class="btn btn-warning stretched-link rounded-pill py-2 px-4">Join mailing list</a>
      </div>
      <div class="col-12 col-lg-4 p-0 footer-center order-1 order-lg-2">
        <div><h3 class="title-underlines p-2 text-center">Days of skate</h3></div>
        <div class="d-flex flex-row justify-content-center align-items-center"><p class=""><?php echo get_field('days_of_skate'); ?></p></div>
      </div>
      <div class="col-12 col-lg-4 p-0 order-3">
        <div><h3 class="title-underlines py-2 text-center">Contact</h3></div>
        <div class="d-flex flex-column align-items-center">
          <p><?php echo get_field('contact_email'); ?></p>
          <p><?php echo get_field('contact_phone'); ?></p>
        </div>
      </div>
    </div>
  </footer>