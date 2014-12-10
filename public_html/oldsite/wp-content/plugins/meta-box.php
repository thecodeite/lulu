<?php
/*
Plugin Name: Meta Box Example
Plugin URI: http://wp.tutsplus.com/
Description: Adds an example meta box to wordpress.
Version: None
Author: Christopher Davis
Author URI: http://wp.tutsplus.com/
License: Public Domain
*/

add_action( 'add_meta_boxes', 'cd_meta_box_add' );
function cd_meta_box_add()
{
	add_meta_box( 'my-meta-box-id', 'Enter Video ID', 'cd_meta_box_cb', 'videos', 'normal', 'high' );
}


function cd_meta_box_cb( $post )
{
	$video_type = get_post_meta($post->ID,'my_video_type',true);
	$video_id = get_post_meta($post->ID,'my_meta_box_text',true);
	wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
	
	?>
	<p>
	    <label for="my_meta_box_text">Select video type:</label>
	     <!-- added select for selecting vedio type -->
	    <select name="my_video_type" id="my_video_type">  
	        <option <?php echo ($video_type == 'youtube') ? "selected='selected'" : "" ;?> value="youtube">Youtube</option>
	        <option <?php echo ($video_type == 'vimeo') ? "selected='selected'" : "" ;?> value="vimeo">Vimeo</option>
	    </select>
	    <!-- added select for selecting vedio type -->
	</p>
	
	<p>
	    <label for="my_meta_box_text">Youtube/Vimeo ID:</label>
	    <input type="text" name="my_meta_box_text" id="my_meta_box_text" value="<?php echo $video_id; ?>" />
	</p>

	

	<?php	
}


add_action( 'save_post', 'cd_meta_box_save' );
function cd_meta_box_save( $post_id )
{
	// Bail if we're doing an auto save
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	
	// if our nonce isn't there, or we can't verify it, bail
	if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
	
	// if our current user can't edit this post, bail
	if( !current_user_can( 'edit_post' ) ) return;
	
	// now we can actually save the data
	$allowed = array( 
		'a' => array( // on allow a tags
			'href' => array() // and those anchords can only have href attribute
		)
	);
	
	// Probably a good idea to make sure your data is set
	//if( isset( $_POST['my_meta_box_text'] ) )
	//	update_post_meta( $post_id, 'my_meta_box_text', wp_kses( $_POST['my_meta_box_text'], $allowed ) );
		
if( isset( $_POST['my_meta_box_text'] ) && isset( $_POST['my_video_type'] ) ) {
        update_post_meta( $post_id, 'my_meta_box_text', wp_kses( $_POST['my_meta_box_text'], $allowed ) );
        update_post_meta( $post_id, 'my_video_type', wp_kses( $_POST['my_video_type'], $allowed ) );
    }
}
?>