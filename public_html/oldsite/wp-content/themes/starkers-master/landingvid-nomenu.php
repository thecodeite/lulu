<?php
/*Template Name: Landing Video */ 
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header-nomenu', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php comments_template( '', true ); ?>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>