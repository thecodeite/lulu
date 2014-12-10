<?php
/*Template Name: Contact */ 
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<div class="contact-content">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<!--<h2><?php the_title(); ?></h2>-->
			<?php the_content(); ?>
	<?php endwhile; ?>
	
	
	<!--
	<div class="map">
	<iframe width="479" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?q=52.627788,-1.121166&amp;num=1&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=52.627749,-1.12112&amp;spn=0.018234,0.041113&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.uk/maps?q=52.627788,-1.121166&amp;num=1&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=52.627749,-1.12112&amp;spn=0.018234,0.041113&amp;z=14&amp;source=embed" style="color:#0000FF;text-align:left"></a></small>
	</div>
	-->

</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>