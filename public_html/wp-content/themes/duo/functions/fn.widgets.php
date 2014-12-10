<?php

// Widgets
if ( function_exists( 'register_sidebar' ) ) 
{
	register_sidebar(
		array(
			'name'			=> 'Sidebar Widgets',
			'id' 			=> 'sidebar_widgets',
			'before_widget' => '<div id="%1$s" class="widget">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h4>',
			'after_title' 	=> '</h4>',
		)
	);
}