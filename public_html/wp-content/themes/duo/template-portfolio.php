<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/preloader.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
        	$("#portfolio").preloader();
        });
    </script>
	<section id="portfolio">
	    <ul class="nolist">
    		<?php 
                $portfolio = new WP_Query( array( 'order' => 'DESC', 'post_type' => 'portfolio', 'posts_per_page' => -1 ) );
    		    if ( $portfolio->have_posts() ) : while( $portfolio->have_posts() ) : $portfolio->the_post();
    		         $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'portfolio'); 
    		          
    		         $terms = get_the_terms( $post->ID, 'filter' );
    							
                     if ( $terms && ! is_wp_error( $terms ) ) : 
                        $links = array();
                    
                    	foreach ( $terms as $term ) 
                    	{
                    		$links[] = $term->name;
                    	}
                    	$links   = str_replace(' ', '-', $links);	
                    	$filters = join( " ", $links );	
                    	$tax     = join( " / ", $links );		
                     else :	
                    	$tax = '';	
                     endif;
    		 ?>
    		     <?php if ( $featured_image[0] ) : ?>
                    <li class="item <?php echo strtolower($filters); ?>">
                        <a href="<?php the_permalink(); ?>">
        	               <span class="magnify animated bounceInUp">
        	                   <b><?php the_title(); ?></b><br><?php echo strtolower($tax); ?>
        	               </span>
        	               <img src="<?php echo $featured_image[0]; ?>" alt="<?php the_title(); ?>" class="portfolio-item" />
                        </a>
                    </li>
                 <?php endif; ?>
    		<?php endwhile; endif; ?>
		</ul>
    </section>	
<?php get_footer(); ?>