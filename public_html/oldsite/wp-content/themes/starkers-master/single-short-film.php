<?php
/*Template Name: Short Film */ 
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<div class="page-content">
 
	<?php   
	$loop = new WP_Query( array( 'post_type' => 'shortFilm', 'category' => $term, 'post_child' => 0, 'posts_per_page' => 5,  'order' => 'ASC' )); 
	

 while ( $loop->have_posts() ) : $loop->the_post(); 
  

        //$args = array( 'post_type' => 'videos', 'posts_per_page' => 20, 'orderby' => 'date', 'order' => 'ASC' );
        $ytubeID = get_post_meta($post->ID, '_youtubeID', true);
        $vimID = get_post_meta($post->ID, '_vimeoID', true);

        $videos_categories = array();           // ARRAY CONTAINING ALL CATEGORY ID ASSIGNED TO THIS POST
        $videos_cat_id = get_the_category(); // GET ALL CATEGORIES OBJECT ASIGNED TO CURRENT POST

        foreach($videos_cat_id as $videos_catid){
            $videos_categories[] = $catid->cat_ID;
        }
        $videos_cat_to_check = get_cat_ID( $videos_cat_name  ); // EXAMPLE get_cat_ID( 'music'  )
       
        



        if ($ytubeID || $vimID){
            if ($ytubeID && in_array($videos_cat_to_check,$videos_categories)){ // CHECK IF CURRENT POST HAS CATEGORY MUSIC 
				
				
				
                echo '<div class="video"><iframe title="YouTube video player" class="youtube-player" type="text/html" src="http://www.youtube.com/embed/'.$ytubeID.'"  allowfullscreen="true" frameborder="0" width="710" height="460">';

                echo '</iframe></div>';
                } elseif ($vimID){
                echo '<br />';
                echo '<div class="video"><iframe src="http://player.vimeo.com/video/'.$vimID.'" width="710" height="460" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>';
                }//end if yutbeID or vimIDthe_excerpt(); //excerpt added for information
                
             
        }
        echo '<h3>';
			$post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label;
			echo '</h3>';

        
  the_content();

   endwhile;?>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>