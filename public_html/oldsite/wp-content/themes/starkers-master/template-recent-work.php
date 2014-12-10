<?php
/*Template Name: Recent Work */ 
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<div class="page-content">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		 
		
		<?php the_content(); ?>
		<?php the_post_thumbnail();?>
		
	<?php endwhile; ?>

</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>