<?php get_header(); ?>

<main class="main">
    <div class="booking-title booking-title-castleford">
        <h1 class="title-medium outline-purple">Castleford</h1>
        <h2 class="title-small outline-purple">Select and Skate</h2>
    </div>
    <?php include_partial("booking-header"); ?>

    <section id="castleford-glider-section" class="paper-bg p-4">
        <div class="container pt-3">
          <div class="rounded-pill bg-purple border-yellow text-center form-header-outer d-inline-block my-2">
            <h4 class="text-uppercase font-weight-bold form-header">I would like to schedule...</h4>
          </div>
        </div>
        </div>
        <div class="">
            <?php include_partial("castleford-booking-glider"); ?>
        </div>
    </section>

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

<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>

<script>
  new Glide('.glide', {
    type:"slider",
    perView: 2,
    breakpoints: {
      1000: {
        perView: 1,
      }
    },
  }).mount()
</script>
</body>

</html>