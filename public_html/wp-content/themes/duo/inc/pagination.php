<?php
    global $numpages;
    if ( is_single() && $numpages > 1 ) :
?>
<div class="pagination">
    <div class="boxed">
        <?php
         	$args = 
         	array(
        		'before'           => '<p>' . __( 'Pages:', 'refinery' ),
        		'after'            => '</p>',
        		'link_before'      => '',
        		'link_after'       => '',
        		'next_or_number'   => 'number',
        		'separator'        => ' ',
        		'nextpagelink'     => __( 'Next page', 'refinery' ),
        		'previouspagelink' => __( 'Previous page', 'refinery' ),
        		'pagelink'         => '%',
        		'echo'             => 1
        	);
        	wp_link_pages( $args );
        ?>
    </div>
</div>
<?php endif; ?>

<?php if ( ! is_single() ) : ?>
<div class="pagination">
    <div class="boxed">
        <?php
    		global $wp_query;
    
    		$big_int = 999999999; // need an unlikely integer
    
    		echo paginate_links( 
    			array(
    				'base' 	       => str_replace($big_int, '%#%', esc_url(get_pagenum_link($big_int))),
    				'format'       => '?paged=%#%',
    				'current'      => max(1, get_query_var('paged') ),
    				'total'        => $wp_query->max_num_pages,
        			'show_all'     => false,
        			'end_size'     => 1,
        			'mid_size'     => 2,
        			'prev_next'    => true,
        			'prev_text'    => __('&laquo; Newer Posts', 'refinery'),
        			'next_text'    => __('Older Posts &raquo;', 'refinery'),
        			'type'         => 'plain',
        			'add_args'     => false,
    			) 
    		);
    	?>
    </div>
</div>
<?php endif; ?>