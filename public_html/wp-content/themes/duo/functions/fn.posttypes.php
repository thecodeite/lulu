<?php

// custom post type
function refinery_post_types() 
{	
	// portfolio
	register_post_type( 'Portfolio',
		array(
			'labels' 		=> array(
			'name' 			=> __( 'Portfolio', 'refinery' ),
			'singular_name' => __( 'Portfolio', 'refinery' ),
			'add_new' 		=> __( 'Add New Project', 'refinery' ),
			'add_new_item' 	=> __( 'Add New Project', 'refinery' ),
			'edit' 			=> __( 'Edit', 'refinery' ),
			'edit_item' 	=> __( 'Edit Project', 'refinery' ),
			'view' 			=> __( 'View', 'refinery' ),
			'view_item' 	=> __( 'View Project', 'refinery' ),
		),
			'public' 		=> true,
			'supports' 		=> array( 'title', 'editor', 'thumbnail', 'comments' ),
		)
	);

}
add_action( 'init', 'refinery_post_types' );

// portfolio filters
function refinery_filter_init() 
{
	// initialize taxonomy labels
    $labels = array(
        'name'              => _x( 'Filters', 'taxonomy general name', 'refinery' ),
        'singular_name'     => _x( 'Filter', 'taxonomy singular name', 'refinery' ),
        'search_items'      =>  __( 'Search Types', 'refinery' ),
        'all_items'         => __( 'All Filters', 'refinery' ),
        'parent_item'       => __( 'Parent Filter', 'refinery' ),
        'parent_item_colon' => __( 'Parent Filter:', 'refinery' ),
        'edit_item'         => __( 'Edit Filters', 'refinery' ),
        'update_item'       => __( 'Update Filter', 'refinery' ),
        'add_new_item'      => __( 'Add New Filter', 'refinery' ),
        'new_item_name'     => __( 'New Filter Name', 'refinery' ),
    );
    // taxonomy for filters
    register_taxonomy(
        'filter', 
        
        array('portfolio'), 
            array(
                'hierarchical' => true,
                'labels'       => $labels,
                'show_ui'      => true,
                'query_var'    => true,
                'rewrite'      => array( 
                'slug'         => 'filter' 
                ),
            )
        );
}
add_action( 'init', 'refinery_filter_init' );