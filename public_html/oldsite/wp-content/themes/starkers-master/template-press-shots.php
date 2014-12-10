<?php
/*Template Name: Press Shots */ 
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>





<div class="page-content">
	<?php 
	$args = array( 'post_type' => 'pressAndshots', 'posts_per_page' => 20, 'orderby' => 'date', 'order' => 'ASC' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
	 
		
		
			 the_post_thumbnail();
		if(strlen(get_the_title()) != 0)
			{
				echo '<h3>';
				echo the_title();
				echo '</h3>';
			}
		
		 if(strlen(get_the_content()) != 0)
		 {
			the_content();
		 }
	
	 endwhile; ?>


</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>