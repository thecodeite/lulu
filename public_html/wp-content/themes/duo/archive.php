<?php get_header(); ?>	
    <section id="articles">
        <div class="boxed masonry">
    		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'blog' ); ?>
                <article <?php post_class( 'one_third' ); ?> id="post-<?php the_ID(); ?>">
                
                    <?php if ( get_post_format() == 'video' ) : ?>
                    
				        <?php if ( $featured_image[0] ) : ?>
        				    <div class="featured_image">
            				    <a href="<?php the_permalink(); ?>">
        	       			        <img class="featured" src="<?php echo $featured_image[0]; ?>" alt="<?php the_title(); ?>" />
        	       			     </a>
        	       			 </div>
        				<?php endif; ?>
				        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        				<?php the_excerpt(); ?>
                        <?php get_template_part( 'inc/postmeta' ); ?>
                        
    				<?php elseif ( get_post_format() == 'audio' ) : ?>
    				
				        <?php if ( $featured_image[0] ) : ?>
        				    <div class="featured_image">
            				    <a href="<?php the_permalink(); ?>">
        	       			        <img class="featured" src="<?php echo $featured_image[0]; ?>" alt="<?php the_title(); ?>" />
        	       			     </a>
        	       			 </div>
        				<?php endif; ?>
				        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        				<?php the_excerpt(); ?>
                        <?php get_template_part( 'inc/postmeta' ); ?>
                        
                    <?php elseif ( get_post_format() == 'quote' ) : ?>
                    
        				<?php the_content(); ?>
        				<span class="person"><?php the_title(); ?></span>
        				
                    <?php elseif ( get_post_format() == 'link' ) : ?>
                    
        				<?php the_content(); ?>
        				
    				<?php else : ?>
    				
				        <?php if ( $featured_image[0] ) : ?>
        				    <div class="featured_image">
            				    <a href="<?php the_permalink(); ?>">
        	       			        <img class="featured" src="<?php echo $featured_image[0]; ?>" alt="<?php the_title(); ?>" />
        	       			     </a>
        	       			 </div>
        				<?php endif; ?>
				        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        				<?php the_excerpt(); ?>
                        <?php get_template_part( 'inc/postmeta' ); ?>
                        
    				<?php endif; ?>
    			</article>
    		<?php endwhile; endif; ?>
        </div>
        
        <?php get_template_part('inc/pagination'); ?>
    </section>
<?php get_footer(); ?>