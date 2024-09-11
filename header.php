<!DOCTYPE html>
<html lang="en">

	<head>
		<?php wp_head();?>
		<title></title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<!-- Required Core Stylesheet -->
		<link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">
		<!-- Optional Theme Stylesheet -->
		<link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
		<script src="https://kit.fontawesome.com/49f420c203.js" crossorigin="anonymous"></script>
	</head>

	<body <?php body_class(get_post_field('post_name', get_the_ID()));?>>

		<header class="header-outer">
			<div class="d-flex">
				<!-- <img class="nav_header-text-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dark/yellow-siy-text.png" alt=""> -->
			</div>
			<div class="nav-outer">
				<?php include_partial("navbar"); ?>
			</div>
		</header>
