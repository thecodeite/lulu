<?php
/*Template Name: Press And Events */ 
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<div class="page-content">

	<?php 
	
	$args = array( 'post_type' => 'pressAndevents', 'posts_per_page' => 20, 'orderby' => 'date', 'order' => 'ASC' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();

		
			 the_post_thumbnail();
			echo '<h3>';
			$post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label;
			echo '</h3>';
		 the_content(); 
	
	 endwhile; ?>
	
	 

</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>