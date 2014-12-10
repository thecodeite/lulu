<?php
/*
Template Name: Landing Video
*/
?>

<?php get_header(); ?>
    <section id="page">
        <div class="boxed">
		<video onclick="landingvideoclick()" width="900" height="900" autoplay="autoplay" controller="false" loop="loop">
			<source src="http://luluplews.com/landingvid/lulupt1.mp4" type="video/mp4" />
		</video>
        </div>
    </section>
<?php get_footer(); ?>