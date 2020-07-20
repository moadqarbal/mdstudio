<?php

// Bootstrap 4 Navbar
require_once 'wp-bootstrap-navwalker.php';

function md_theme_setup()
{
	// add logo
	add_theme_support('custom-logo');

	// add nav menus
	register_nav_menus(array(
		'primary' => __('primary navigation menu'),
		'footer' => __('footer menu')
	));
}

add_action('after_setup_theme','md_theme_setup');