<?php

/**
 * Include various required files.
 *
 * Add the name of any php file (excluding extension) you wish to be
 * automatically included and loaded.
 *
 * Place these files in the `includes` directory.
 */
$required_files = [
	"remove_wp_rubbish", // Removes unwanted/unused functions, etc.
	"helpers", // Any global "helper" functions for use throughout the site.
	"bs4navwalker" // A class to change the default wp menu HTML into a Bootstrap 4 nav menu. It won't create the actual navbar though.
];
// For each filename, find it in the "includes" directory and load it.
foreach ($required_files as $file) {
	// Locate file and load/include it.
	// If file not found, kill the scripts and spit out an error.
	if (! locate_template($file = "includes/{$file}.php", true, true)) {
		wp_die(
		/* Translators: %s is replaced with the relative file path */
			sprintf(__('Error locating <code>%s</code> for inclusion.'), $file)
		);
	}
}


/**
 * Enqueue (load) CSS and JS
 */

// Enqueue CSS
add_action('wp_enqueue_scripts', 'theme_styles');
function theme_styles() {

	/**
	 * Stuart's Note:
	 *
	 * Delete this comment block before using in production.
	 *
	 * ---
	 *
	 * The first argument/parameter of wp_enqueue_style is called a "handle".
	 * This is a unique ID for the stylesheet.
	 */

	// Font Awesome Icons
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');

	// Bootstrap 4.6
	wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css');

	wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css'); // The theme details.


	/**
	 * Stuart's Note:
	 *
	 * Delete this comment block before using in production.
	 *
	 * ---
	 *
	 * I recommend not using the style.css (as linked above) for styles,
	 * and add styles in your own file in the "css" directory.
	 *
	 * Mainly to keep all stylesheets in the same folder, so it's not confusing finding them.
	 *
	 * I've created a main.css in the "css" directory for you, and enqueued below.
	 */
	wp_enqueue_style('main_css', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style('glide_core', get_template_directory_uri() . '/css/glide.core.css');
	wp_enqueue_style('glice_theme', get_template_directory_uri() . '/css/glide.theme.css');
}

// Enqueue JS
add_action('wp_enqueue_scripts', 'theme_js');
function theme_js() {

	// Bootstrap 4.6
	wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js', ['jquery'], '', false);

	/**
	 * Stuart's Note:
	 *
	 * Delete this comment block before using in production.
	 *
	 * ---
	 *
	 * I've created a main.js in "js" directory.
	 *
	 * ---
	 *
	 * The 1st argument/paramater of wp_enqueue_script is the unique ID (like the styles).
	 *
	 * The 3rd argument is an array of dependencies of what the script relies on. This is optional.
	 * The Bootstrap script above, requires jQuery in order to work, so I've added it to the array,
	 * and will be automatically added to the frontend via WP magic.
	 */
	wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', ['jquery'], '', false);

	// Enqueue Swiper JS (delete when carousel is working)
	// wp_enqueue_script('swiper_js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js', ['jquery'], '', false);

	// Glide core
	wp_enqueue_script('glide_js-core', get_template_directory_uri() . '/node_modules/@glidejs/glide/dist/css/glide.core.min.css', ['jquery'], '', false);

	// Glide optional
	wp_enqueue_script('glide_js-optional', get_template_directory_uri() . '/node_modules/@glidejs/glide/dist/css/glide.theme.min.css', ['jquery'], '', false);
}


/**
 * Add Supports
 */
add_theme_support('menus');
add_theme_support('post-thumbnails');


/**
 * Nav Menu
 *
 * Registers various menu locations.
 *
 * This creates the locations that are seen in the backend appearance->menus
 */
add_action('init', 'register_theme_menus');
function register_theme_menus() {
	register_nav_menus(
		[
			'header_menu' => __('Header Menu'),
			'footer_menu' => __('Footer Menu')
		]
	);
}

// Yusaf note: Remove before pushing live
@ini_set('display_errors', 1);