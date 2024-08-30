<!--  Old footer -->
<!-- <footer>
    <div class="row">
        <div class="col">
            <h5>List 1</h5>
            <ul class="list-unstyled">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </div>
        <div class="col">
            <h5>List 2</h5>
            <ul class="list-unstyled">
                <li><a href="#">Link 4</a></li>
                <li><a href="#">Link 5</a></li>
                <li><a href="#">Link 6</a></li>
            </ul>
        </div>
            <div class="col">
            <h5>List 3</h5>
            <ul class="list-unstyled">
                <li><a href="#">Link 7</a></li>
                <li><a href="#">Link 8</a></li>
                <li><a href="#">Link 9</a></li>
            </ul>
        </div>
    </div>
</footer> -->

<footer class="container p-5 opac mx-auto my-4">
  <div class="row border-main bg-light rounded-xl">
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
    peek: {
    before: 0,
    after: 200
  },
    breakpoints: {
      1000: {
        perView: 1,
      }
    },
    peek: {
      before: 0,
      after: 0
  },
  }).mount()
</script>
</body>

</html>
