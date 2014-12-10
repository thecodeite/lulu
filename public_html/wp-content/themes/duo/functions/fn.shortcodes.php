<?php  

// Columns
function refinery_one_full_shortcode($atts, $content = null) {
   return '<div class="one_full">'.do_shortcode($content).'</div>';
}
add_shortcode('one full', 'refinery_one_full_shortcode');

function refinery_one_half_shortcode($atts, $content = null) {
   return '<div class="one_half">'.do_shortcode($content).'</div>';
}
add_shortcode('one half', 'refinery_one_half_shortcode');

function refinery_one_third_shortcode($atts, $content = null) {
   return '<div class="one_third">'.do_shortcode($content).'</div>';
}
add_shortcode('one third', 'refinery_one_third_shortcode');

function refinery_two_third_shortcode($atts, $content = null) {
   return '<div class="two_third">'.do_shortcode($content).'</div>';
}
add_shortcode('two third', 'refinery_two_third_shortcode');

function refinery_one_quarter_shortcode($atts, $content = null) {
   return '<div class="one_quarter">'.do_shortcode($content).'</div>';
}
add_shortcode('one quarter', 'refinery_one_quarter_shortcode');

function refinery_one_fifth_shortcode($atts, $content = null) {
   return '<div class="one_fifth">'.do_shortcode($content).'</div>';
}
add_shortcode('one fifth', 'refinery_one_fifth_shortcode');

// Pricing
function refinery_pricing_shortcode($atts) {
    extract(shortcode_atts(array(
        "heading"     => '',
        "price"       => '',
		"items"       => '',
		"link"        => '',
		"name"        => '',
	), $atts));
	
   return '
        <div class="pricing animated bounceInUp">
            <section class="head">'.$heading.'</section>
            <section class="content">
                <ul>
                <li class="price">'.$price.'</li>'
                    .$items.
                '<li><a href="'.$link.'" class="button">'.$name.'</a></li>
                </ul>
            </section>
        </div>';
}
add_shortcode('pricing', 'refinery_pricing_shortcode');

// Progress bar
function refinery_progressbar_shortcode($atts) {
    STATIC $i = 0;
	$i++;
	
	extract(shortcode_atts(array(
		"amount" => '',
		"value"  => '',
	), $atts));
	return '
	<script type="text/javascript">
	   jQuery(document).ready(function($){
	       function progress(percent, $element) {
            	var progressbarwidth = percent * $element.width() / 100;
            	$element.find("div").animate({ width: progressbarwidth }, 1000).html("<strong>'.$value.'</strong> &nbsp;" + percent + "% &nbsp;");
           }
           progress('.$amount.', $("#progressbar'.$i.'"));
       });
    </script>
	<div class="progressbar" id="progressbar'.$i.'"><div></div></div>
	';
}
add_shortcode("progressbar", "refinery_progressbar_shortcode");

// Video
function refinery_video_shortcode($atts) {
	extract(shortcode_atts(array(
		"src" => '',
	), $atts));
	return '<iframe src="'.$src.'" frameborder="0" allowfullscreen></iframe>';
}
add_shortcode("video", "refinery_video_shortcode");

// Audio
function refinery_audio_shortcode($atts) {
	extract(shortcode_atts(array(
		"file" => '',
	), $atts));
	return
'
<script type="text/javascript" src="'.get_template_directory_uri().'/assets/js/jplayer/jplayer.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
	$("#jplayer").jPlayer({
		ready: function () {
    			$(this).jPlayer("setMedia", {
    				mp3:"'.$file.'"
    			}).jPlayer("stop");
    	},
		ended: function (event) {
			$(this).jPlayer("stop");
		},
		play: function() { // To avoid jPlayers playing together.
			$(this).jPlayer("pauseOthers");
		},
		swfPath: "'.get_template_directory_uri().'/assets/js/jplayer/",
    		cssSelectorAncestor: "#jp_interface",
    			supplied: "mp3, all"
	});
});
</script>

<div id="standalone_player">
	<div id="jplayer" class="jp-jplayer"></div>
	
	<div class="jp-audio-container">
    	<div class="jp-audio">
        	<div class="jp-type-single">
        	
            	<div id="jp_interface" class="jp-interface">
                	<ul class="jp-controls">
                        <li><a href="#" class="jp-play" tabindex="1"><img src="'.get_template_directory_uri().'/assets/img/play.png" alt="Play" /></a></li>
                        <li><a href="#" class="jp-pause" tabindex="1"><img src="'.get_template_directory_uri().'/assets/img/pause.png" alt="Pause" /></a></li>
                     </ul>
                     
                     <div class="jp-progress-container">
                     	<div class="jp-progress">
                        	<div class="jp-seek-bar">
								              <div class="jp-play-bar"></div>
                            </div>
                        </div>
                     </div>
            	</div>
            	
        	</div>
    	</div>
	</div>      
</div>
';
}
add_shortcode("audio", "refinery_audio_shortcode");

?>