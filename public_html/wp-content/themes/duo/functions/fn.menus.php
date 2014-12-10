<?php

// Wordpress 3 Menu Support
add_theme_support('menus');

// WP3 Menus
add_action( 'init', 'register_refinery_menus' );

function register_refinery_menus() 
{
	register_nav_menus(
		array(
			'primary_menu' 	 => __('Primary Menu', 'refinery')
		)	
	);
}