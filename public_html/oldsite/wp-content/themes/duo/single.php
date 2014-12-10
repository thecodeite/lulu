<?php get_header(); ?>
    <section id="articles">
        <div class="boxed">
            
    		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
                <article <?php post_class( 'single_post post animated bounceInRight' ); ?> id="post-<?php the_ID(); ?>">
                    <?php $format = get_post_format(); ?>
                    
				    <div class="one_full">
        				<?php if ( $featured_image[0] && $format != 'video' ) : ?>
        				    <div class="featured_image">
            				     <a rel="prettyPhoto" href="<?php echo $featured_image[0]; ?>" title="<?php the_title(); ?>">
        	       			        <img class="featured" src="<?php echo $featured_image[0]; ?>" alt="<?php the_title(); ?>" />
        	       			     </a>
        	       			 </div>
        				<?php endif; ?>

        				<?php the_content(); ?>
        				<?php get_template_part( 'inc/postmeta' ); ?>
        				<hr>
        				<?php get_template_part( 'inc/postnavi' ); ?>
				    </div>
    			</article>
    		<?php endwhile; endif; ?>
        </div>
        <?php get_template_part('inc/pagination'); ?>
    </section>
    
    <div id="commentbox">
        <div class="boxed">
            <?php if ( comments_open() ) : ?>
                <?php comments_template(); ?>
            <?php else : ?>
                <div class="alert alert-warning"><?php _e("Sorry, comments are closed are this post.", "refinery"); ?></div>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>