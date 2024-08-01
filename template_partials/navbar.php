
<!-- Old navbar -->
<!-- <nav class="navbar navbar-expand-md navbar-light">
	<div class="container">

		<a class="site-title" href="<?php bloginfo("wpurl") ?>"><?php bloginfo("name"); ?></a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<a class="site-title" href="/">Home</a>
		<a class="site-title" href="/booking">Booking</a>
		<a class="site-title" href="/contact">Contact</a>
		<a class="" href="/shop">Shop</a>

		<?php nav_menu("header-menu", "navbarNav", "collapse navbar-collapse justify-content-end", "navbar-nav"); ?>
	</div>

</nav> -->


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="site-title navbar-brand" href="<?php bloginfo("wpurl") ?>"><?php bloginfo("name"); ?></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/booking">Booking</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="/shop">Shop</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>