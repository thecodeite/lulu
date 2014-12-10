<div class="boxed">
    <!-- titles -->
	<?php if ( is_404() ) : ?>
        <h2 class="tagline"><?php esc_html_e( 'Uh oh, something went wrong, aka 404', 'refinery' ); ?></h2>
    <?php elseif ( is_search() ) : ?>
        <h2 class="tagline">
            <?php 
		        _e('Search Results for ', 'refinery'); 
		    
		        /* count */ 
		        $allsearch = new WP_Query("s=$s&showposts=-1"); 
		        $key = esc_html($s, 1); $count = $allsearch->post_count; 
		    
		        echo '<span class="highlight">'.$key.'</span>'; 
		        echo '<small> &mdash; '.$count.' article(s) found.</small> '; 
		    
		        wp_reset_query(); 
		    ?>
        </h2>
    <?php elseif ( is_page() ) : ?>
        <h2 class="tagline"><?php esc_html_e( the_title() ); ?></h2>
    <?php else : ?>
        <h2 class="tagline"><?php esc_html_e( wp_title(' ', ' ') ); ?></h2>
    <?php endif; ?>
    <!-- /titles -->
</div>