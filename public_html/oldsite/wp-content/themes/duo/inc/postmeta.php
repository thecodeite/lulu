<ul class="postmeta nolist">	
	<li class="date"><strong><?php _e('Posted:', 'refinery'); ?></strong> <?php echo the_time('F jS, Y'); ?></li>
	<?php if ( is_single() ) : ?>
    	<li class="author"><strong><?php _e('Author:', 'refinery'); ?></strong> <?php the_author(); ?></li>
    	<?php if ( get_the_tags() ) : ?>
    		<li><strong><?php _e('Tagged:', 'refinery'); ?></strong> <?php the_tags('', ', ', ''); ?></li>
    	<?php endif; ?>
	<?php endif; ?>
</ul>