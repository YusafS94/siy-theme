<footer class="container p-5 opac mx-auto">
  <div class="row border-main bg-purple rounded-xl">
    <div class="col-12 col-lg-4 p-0 d-flex align-self-center justify-content-center">
      <a href="/" class="btn btn-warning stretched-link rounded-pill py-2 px-4">Join mailing list</a>
    </div>
    <div class="col-12 col-lg-4 p-0 footer-center">
      <div><h3 class="border-bottom border-dark p-2 text-center">Days of skate</h3></div>
      <div class="d-flex flex-row justify-content-center align-items-center"><p class="">Monday - Saturday</p></div>
    </div>
    <div class="col-12 col-lg-4 p-0">
      <div><h3 class="border-bottom border-dark py-2 text-center">Contact</h3></div>
      <div class="d-flex flex-column align-items-center">
        <p>hardy@skateityourself.com</p>
        <p>(+44)7711085906</p>
      </div>
    </div>
  </div>
</footer>


<?php wp_footer();?>
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>
<!-- <script type="module" src="<?php get_template_directory_uri() . '/js/module.js' ?>"></script> -->

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
