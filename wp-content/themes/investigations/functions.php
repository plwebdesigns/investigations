<?php

function my_portfolio_setup() {

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	//Register Menu
	register_nav_menu('main-menu', 'Main Menu');


}
add_action('after_setup_theme', 'my_portfolio_setup');

function add_theme_scripts() {
	//queue up bootstrap
	wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
	//queue up my style sheet
	wp_enqueue_style('style', get_stylesheet_uri());
	//queue up fonts
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Lobster|Montserrat|Roboto+Slab');

	//bring in JS for bootstrap
	wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.2.1.slim.min.js");
	wp_enqueue_script('popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js");
	wp_enqueue_script('bootstrap-js', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js");
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');