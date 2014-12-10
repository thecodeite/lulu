<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	// register_nav_menus(array('primary' => 'Primary Navigation'));
	
	function register_my_menu() {
		register_nav_menu('header-menu',__( 'Header Menu' ));
		}
		add_action( 'init', 'register_my_menu' );
		
	
	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */
	
	// Fashion & Editorial Custom Post Type
	add_action( 'init', 'create_fashionAndeditorial' );
	function create_fashionAndeditorial() {
		register_post_type( 'fashionAndeditorial',
			array(
				'labels' => array(
				'name' => __( 'Fashion and Editorial' ),
				'singular_name' => __( 'FashionAndeditorial' )
			),
			'public' => true,
			'taxonomies' => array("category"),//allows you to add categories to custom post types
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			)
		);
	}	
	
		// Fashion & Editorial Custom Post Type
	add_action( 'init', 'create_pressAndshots' );
	function create_pressAndshots() {
		register_post_type( 'pressAndshots',
			array(
				'labels' => array(
				'name' => __( 'Press Shots for Artists/Bands' ),
				'singular_name' => __( 'pressAndshots' )
			),
			'public' => true,
			'taxonomies' => array("category"),//allows you to add categories to custom post types
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			)
		);
	}		
	
	/* Gallery Custom Post Type
	add_action( 'init', 'create_gallery' );
	function create_gallery() {
		register_post_type( 'gallery',
			array(
				'labels' => array(
				'name' => __( 'Gallery' ),
				'singular_name' => __( 'Gallery' )
			),
			'public' => true,
			'taxonomies' => array("category"),//allows you to add categories to custom post types
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			)
		);
	}
	*/
	

	
	
	
	/* Videos Custom Post Type
		add_action( 'init', 'create_videos' );
		function create_videos() {
			register_post_type( 'videos',
				array(
					'labels' => array(
					'name' => __( 'Videos' ),
					'singular_name' => __( 'Video' )
				),
				'public' => true,
				'taxonomies' => array("category"),
				'has_archive' => true,
				'supports' => array( 'title', 'editor', 'thumbnail' ),
				)
			);
		}	
		*/
		
		// Music Custom Post Type
		add_action( 'init', 'create_music' );
		function create_music() {
			register_post_type( 'music',
				array(
					'labels' => array(
					'name' => __( 'Music' ),
					'singular_name' => __( 'Music' )
				),
				'public' => true,
				'taxonomies' => array("category"),
				'has_archive' => true,
				'supports' => array( 'title', 'editor', 'thumbnail' ),
				)
			);
		}	
		
			// Commercial Custom Post Type
		add_action( 'init', 'create_commercial' );
		function create_commercial() {
			register_post_type( 'commercial',
				array(
					'labels' => array(
					'name' => __( 'Commercial' ),
					'singular_name' => __( 'Commercial' )
				),
				'public' => true,
				'taxonomies' => array("category"),
				'has_archive' => true,
				'supports' => array( 'title', 'editor', 'thumbnail' ),
				)
			);
		}
		
		
		// Promo Custom Post Type
		add_action( 'init', 'create_promo' );
		function create_promo() {
			register_post_type( 'promo',
				array(
					'labels' => array(
					'name' => __( 'Promo' ),
					'singular_name' => __( 'promo' )
				),
				'public' => true,
				'taxonomies' => array("category"),
				'has_archive' => true,
				'supports' => array( 'title', 'editor', 'thumbnail' ),
				)
			);
		}
		
		// Promo Custom Post Type
		add_action( 'init', 'create_shortFilm' );
		function create_shortFilm() {
			register_post_type( 'shortFilm',
				array(
					'labels' => array(
					'name' => __( 'Short Film' ),
					'singular_name' => __( 'shortFilm' )
				),
				'public' => true,
				'taxonomies' => array("category"),
				'has_archive' => true,
				'supports' => array( 'title', 'editor', 'thumbnail' ),
				)
			);
		}

		
		
		// Press and Events Custom Post Type
		add_action( 'init', 'create_pressAndevents' );
		function create_pressAndevents() {
			register_post_type( 'pressAndevents',
				array(
					'labels' => array(
					'name' => __( 'Press and Events' ),
					'singular_name' => __( 'pressAndevents' )
				),
				'public' => true,
				'taxonomies' => array("category"),
				'has_archive' => true,
				'supports' => array( 'title', 'editor', 'thumbnail' ),
				)
			);
		}
	
	
	


	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}
	
	/* ========================================================================================================================
	
	Extra Options for Wsywig
	
	======================================================================================================================== */
	
	function myformatTinyMCE($in)
	{
	 $in['remove_linebreaks']=false;
	 $in['gecko_spellcheck']=false;
	 $in['keep_styles']=true;
	 $in['accessibility_focus']=true;
	 $in['tabfocus_elements']='major-publishing-actions';
	 $in['media_strict']=false;
	 $in['paste_remove_styles']=false;
	 $in['paste_remove_spans']=false;
	 $in['paste_strip_class_attributes']='none';
	 $in['paste_text_use_dialog']=true;
	 $in['wpeditimage_disable_captions']=true;
	 $in['plugins']='inlinepopups,tabfocus,paste,media,fullscreen,wordpress,wpeditimage,wpgallery,wplink,wpdialogs,wpfullscreen';
	 $in['content_css']=get_template_directory_uri() . "/editor-style.css";
	 $in['wpautop']=true;
	 $in['apply_source_formatting']=false;
	 $in['theme_advanced_buttons1']='formatselect,forecolor,|,bold,italic,underline,|,bullist,numlist,blockquote,|,justifyleft,justifycenter,justifyright,justifyfull,|,link,unlink,|,wp_fullscreen,wp_adv';
	 $in['theme_advanced_buttons2']='pastetext,pasteword,removeformat,|,charmap,|,outdent,indent,|,undo,redo';
	 $in['theme_advanced_buttons3']='';
	 $in['theme_advanced_buttons4']='';
	 return $in;
	 }
add_filter('tiny_mce_before_init', 'myformatTinyMCE' );

	/* ========================================================================================================================
	
	Youtube Video Shortcode - using the Videos ID
	
	======================================================================================================================== */

	function wp_youtube_video($atts) {
	    extract(shortcode_atts(array('id' => ''), $atts));
	    return '<iframe title="YouTube video player" class="youtube-player" type="text/html" width="640" height="390" src="http://www.youtube.com/embed/'.$id.'" frameborder="0" allowFullScreen></iframe>';
	}
	
	add_shortcode('youtube', 'wp_youtube_video');  
	  
    /* ========================================================================================================================
	
	Vimeo Video Shortcode - using the Videos ID
	
	======================================================================================================================== */
    
	function wp_vimeo_video($atts) {
        extract(shortcode_atts(array('id' => ''), $atts));
        return '<iframe src="http://player.vimeo.com/video/'.$id.'" width="640" height="390" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
    }
    add_shortcode('vimeo', 'wp_vimeo_video');    
    
    /* ========================================================================================================================
	
	Shortcode to display content on right of page 
	
	======================================================================================================================== */
	
	function rightContent_shortcode( $atts, $content = null ) {
	return '<div class="right">' . $content . '</div>';
	}
	add_shortcode( 'right', 'rightContent_shortcode' );
	
    /* ========================================================================================================================
	
	Custom Meta Box 
	
	======================================================================================================================== */
	// Create the Video Information Meta Box by hooking into the admin menu for a post
	add_action('admin_menu', 'video_add_box');
	
	
	function video_add_box(){
	$postypes = array('videos', 'music', 'commercial','promo', 'shortFilm');
	foreach ( $postypes as $postype) {

    add_meta_box(
        'video_information',
        'Video Information',
        'video_information',
        $postype
    );
	}

	}
	
		
	//function to populate the meta box added above
	function video_information(){
	global $post;
	
	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="video_noncename" id="video_noncename" value="' .
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	
	//adds the custom field _youtubeID plus some other stuff
	$youtubeID = get_post_meta($post->ID, '_youtubeID', true);
	if ( empty($youtubeID) ) {
	$youtubeID = '';
	}
	
	//adds the custom field _vimeoID
	$vimeoID = get_post_meta($post->ID, '_vimeoID', true);
	if ( empty($vimeoID) ) {
	$vimeoID = '';
	}
	
	//add the box
	echo '<br />';
	echo '<strong>Youtube ID:</strong>  <input type="text" name="_youtubeID" value="' . $youtubeID  . '" size="20" maxlength="30" />';
	echo '<br />';
	echo '<strong>Vimeo ID:</strong>  <input type="text" name="_vimeoID" value="' . $vimeoID  . '" size="20" maxlength="30" />';
	echo '<br />';
	} //end video_information function
	
	//save_video_meta is called below with the action "save_post" and saves your IDs to the post
	function save_video_meta($post_id, $post) {
	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	
	if ( !wp_verify_nonce( $_POST['video_noncename'], plugin_basename(__FILE__) )) {
	return $post->ID;
	}
	
	// Is the user allowed to edit the post or page?
	
	if ( !current_user_can( 'edit_post', $post->ID )){
	return $post->ID;
	}
	
	$video_meta['_youtubeID'] = $_POST['_youtubeID'];
	$video_meta['_vimeoID'] = $_POST['_vimeoID'];
	foreach ($video_meta as $key => $value) { // Cycle through the $video_meta array
	if( $post->post_type == 'revision' ) return; // Don't store custom data twice
	
	$value = implode(',', (array)$value); // If $value is an array, make it a CSV
	
	if($value) {
    update_post_meta($post_id, $key, $value);
} else 
    delete_post_meta($post_id, $key); // Delete if blank
}
	} //end save_video_meta
	
	//save the video custom fields
	add_action( 'save_post', 'my_save_postdata' );
function my_save_postdata($post_id){
    $video_meta['_youtubeID'] = $_POST['_youtubeID'];
    $video_meta['_vimeoID'] = $_POST['_vimeoID'];
    foreach ($video_meta as $key => $value) { // Cycle through the $video_meta array
        if(  $_POST['post_type'] == 'revision' ) return; // Don't store custom data twice
        $value = implode(',', (array)$value); // If $value is an array, make it a CSV

        if(get_post_meta($post_id, $key, FALSE)) { // If the custom field already has a value
            update_post_meta($post_id, $key, $value);
        } else { // If the custom field doesn't have a value
            add_post_meta($post_id, $key, $value);
        }
        if(!$value) delete_post_meta($post_id, $key); // Delete if blank
    }//endforeach video meta
 }
 
function my_page_css_class( $css_class, $page ) {
    global $post;
    if ( $post->ID == $page->ID ) {
        $css_class[] = 'current_page_item';
    }
    return $css_class;
}
add_filter( 'page_css_class', 'my_page_css_class', 10, 2 );