<h3><?php comments_number( '0 responses', '1 response', '% responses' ); ?>.</h3>

<hr>

<ul class="nolist" id="comments">
	<?php $comment_avatar = wp_list_comments(array('avatar_size' => 65)); ?>
</ul>

<?php if ( get_option('page_comments') ) : ?>
    <div class="pagination">
      	<?php paginate_comments_links(); ?> 
    </div>
<?php endif; ?>

<?php comment_form(); ?>