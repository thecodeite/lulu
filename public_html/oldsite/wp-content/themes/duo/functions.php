<?php

function refinery_setup() {
    // Add theme support
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'blog', 310, 155, true );
    add_theme_support( 'post-formats', array( 'video', 'audio', 'link', 'quote' ) );
    
    // Content width
    if ( ! isset( $content_width ) )
    {
    	$content_width = 1280;
    }
    
    // Localization support
    load_theme_textdomain( 'refinery', get_template_directory_uri() .'/language' );
    
    // Add admin link to custom css file
    function refinery_css_submenu_page() 
    {
    	add_theme_page( 'Custom CSS', 'Custom CSS', 'edit_theme_options', 'theme-editor.php?file=custom.css&theme=duo', '', '' ); 
    }
    add_action('admin_menu', 'refinery_css_submenu_page');
}
add_action( 'after_setup_theme', 'refinery_setup' );

// Load individual function files
include_once( 'functions/fn.customizer.php' );
include_once( 'functions/fn.menus.php' );
include_once( 'functions/fn.posttypes.php' );
include_once( 'functions/fn.widgets.php' );
include_once( 'functions/fn.autolink.php' );
include_once( 'functions/fn.shortcodes.php' );

// Excerpt length for display purposes
function refinery_excerpt_length( $length ) 
{
	return 20;
}
add_filter( 'excerpt_length', 'refinery_excerpt_length', 999 );

// Excerpt more
function refinery_excerpt_more( $more ) 
{
	return '...';
}
add_filter('excerpt_more', 'refinery_excerpt_more');

// Search Function
function refinery_search_filter($query)
{
	if($query->is_search)
	{
		$query->set('post_type', 'post');
	}
	return $query;
}
add_filter('pre_get_posts', 'refinery_search_filter');

// Load theme stuff for frontend only
if( ! is_admin() )
{   
    function theme_fonts() 
	{
	    // enqueue google fonts with protocol relative url.
    	wp_enqueue_style( 'headings', "//fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700", '', '', 'screen', true );
    }
    add_action( 'wp_enqueue_scripts', 'theme_fonts' );
    
    function refinery_theme_styles()
    {
         wp_enqueue_style('style', get_stylesheet_uri(), '', '31102013', 'screen', true );
    }
    add_action('wp_enqueue_scripts', 'refinery_theme_styles');

	function refinery_theme_scripts()
	{
    	// load wordpress jquery
    	wp_enqueue_script('jquery');

 		// wp_enqueue_script() syntax, $handle, $src, $deps, $version, $in_footer(boolean)
 		wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', 'jquery', '', true);
 		wp_enqueue_script('application', get_template_directory_uri() . '/assets/js/application.js', 'jquery', '', true);
 		wp_enqueue_script('prettyprint', '//google-code-prettify.googlecode.com/svn/loader/run_prettify.js', 'jquery', '', true);
	}
	add_action('wp_enqueue_scripts', 'refinery_theme_scripts');
}