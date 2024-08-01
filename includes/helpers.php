<?php
/**
 * Global helper functions
 */


/**
 * Display the nav menu
 *
 * This will only create the menu using Bootstrap, not the actual navbar.
 *
 * Usage:
 *
 * Place this code where ever you want the nav to appear. Change the arguments as needed.
 *
 *
 * `nav_menu("header-menu", "navbarNav", "collapse navbar-collapse justify-content-end", "navbar-nav");`
 *
 * @param string $menu_name The menu name which is used for both the menu name
 * and the theme location name, so they must be the same.
 *
 * @param string $container_id The ID of the menu container.
 * @param string $container_class The class(es) of the menu container.
 * @param string $menu_class The class(es) of the menu.
 *
 */
function nav_menu($menu_name, $container_id, $container_class, $menu_class) {
	wp_nav_menu(
		[
			'menu'            => $menu_name,
			'theme_location'  => $menu_name,
			'container'       => 'div',
			'container_id'    => $container_id,
			'container_class' => $container_class,
			'menu_id'         => false,
			'menu_class'      => $menu_class,
			'depth'           => 2,
			'fallback_cb'     => 'bs4navwalker::fallback',
			'walker'          => new bs4navwalker()
		]
	);
}

/**
 * Include a page/post partial (page component)
 * ---
 * The `template_partials/` directory will be prefixed and `.php`
 * will be appended.
 *
 * Example: `include_partial("header");` will include `template_partials/header.php`
 *
 * @param string $partial_name The name of the page/post template
 */
function include_partial($partial_name) {
	include get_template_directory() . "/template_partials/$partial_name.php";
}
