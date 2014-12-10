<?php get_header(); ?>
    <section id="page">
        <div class="boxed">
        	<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
                <?php global $more; $more = 0; the_content(); ?>
        	<?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer(); ?>