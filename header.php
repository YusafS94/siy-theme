<!DOCTYPE html>
<html lang="en">

	<head>
		<?php wp_head();?>
		<title></title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body <?php body_class(get_post_field('post_name', get_the_ID()));?>>

		<header>
			<?php include_partial("navbar"); ?>

		</header>
