<?php
/*Template Name: Bio */ 
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<div class="page-content">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
	<?php endwhile; ?>

</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>