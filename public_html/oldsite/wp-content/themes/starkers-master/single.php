<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php
$ytubeID = get_post_meta($post->ID, '_youtubeID', true);
$vimID = get_post_meta($post->ID, '_vimeoID', true);
if ($ytubeID || $vimID){
if ($ytubeID){
$ytube = 'http://www.youtube.com/v/'.$ytubeID.'?fs=1&hd=0';
echo '<br />';
echo '<object width="640" height="390">';
echo '<param name="movie" value="'.$ytube.'"></param>';
echo '<param name="allowFullScreen" value="true"></param>';
echo '<param name="allowScriptAccess" value="always"></param>';
echo '<embed src="'.$ytube.'" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="390">';
echo '</embed>';
echo '</object>';
} elseif ($vimID){
echo '<br />';
echo '<iframe src="http://player.vimeo.com/video/'.$vimID.'?title=0" width="640" height="390" frameborder="0"></iframe>';
}//end if yutbeID or vimIDthe_excerpt(); //excerpt added for information
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>