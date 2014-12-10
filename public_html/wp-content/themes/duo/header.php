<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale = 1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="author" content="iKreativ">
    <meta name="description" content="Clean and classy premium Wordpress themes by iKreativ">
    <meta name="keywords" content="premium, wordpress, theme, ikreativ">
    
    <!-- title -->
    <title><?php echo bloginfo('name'); ?> <?php wp_title(); ?></title>

    <!-- wp head, loads styles functions.php -->
    <?php if ( is_singular() ) { wp_enqueue_script('comment-reply'); } wp_head(); ?>

<script type="text/javascript">

var loaded = false;

var clicked = false;
var secondMovieHandler;
var secondMovieLength = 6600;

function bodyLoaded()
{
    if(document.location.href == 'http://luluplews.com/') {
        if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
	    if(!loaded) {
	        loaded = true;
                loadSite();
            }
        } else {
            
    	    if(navigator.userAgent.search("Chrome") >= 0)
	    {
	        if(navigator.userAgent.match(/Android/i))
                {
                    /*var video = document.getElementsByTagName('video')[0];
                    video.setAttribute('src', 'http://luluplews.com/landingvid/lulupt1encoded.mp4');
                    video.setAttribute('width', '450px');
	            video.setAttribute('height', '450px');*/
                    loadSite();
                }
                else
                {
                    var video = document.getElementsByTagName('video')[0];
                    video.setAttribute('src', 'http://luluplews.com/landingvid/lulupt1.ogv');
                }
            }
            else if(navigator.userAgent.search("Firefox") >= 0)
            {
                var video = document.getElementsByTagName('video')[0];
                video.setAttribute('src', 'http://luluplews.com/landingvid/lulupt1.ogv');
            }
            else
            {
                var video = document.getElementsByTagName('video')[0];
                video.addEventListener('webkitendfullscreen', landingvideoclick, false);
            }
        }
    }
}

function landingvideoclick()
{
    if(!clicked)
    {
        clicked = true;
        if(navigator.userAgent.search("Chrome") >= 0)
        {
            if(navigator.userAgent.match(/Android/i))
            {
                var video = document.getElementsByTagName('video')[0];
                video.setAttribute('src', 'http://luluplews.com/landingvid/lulupt2encoded.mp4');
            }
            else
            {
                var video = document.getElementsByTagName('video')[0];
                video.setAttribute('src', 'http://luluplews.com/landingvid/lulupt2.ogv');
            }
        }
        else if(navigator.userAgent.search("Firefox") >= 0)
        {
            var video = document.getElementsByTagName('video')[0];
            video.setAttribute('src', 'http://luluplews.com/landingvid/lulupt2.ogv');
        }
        else
        {
            var video = document.getElementsByTagName('video')[0];
            video.setAttribute('src', 'http://luluplews.com/landingvid/lulupt2.mp4');
        }
        secondMovieHandler = setInterval(function(){changeBGColor()}, secondMovieLength);
    }
}

function loadSecondMovie()
{
    clearInterval(firstMovieHandler);
    currentMovie = 2;
    var video = document.getElementsByTagName('video')[0];
    video.setAttribute('src', 'http://luluplews.com/landingvid/lulupt2.mp4');
    secondMovieHandler = setInterval(function(){changeBGColor()}, secondMovieLength);
}

function changeBGColor()
{
    var video = document.getElementsByTagName('video')[0];
    video.style.display = 'none';
    document.body.style.background = 'black';
    setInterval(function(){loadSite()}, 500);
}

function loadSite()
{
    document.location.href = 'http://luluplews.com/work/'; // RECENT WORK
}

</script>

</head>
<!-- /head -->


<body onload="bodyLoaded();" id="index" <?php body_class(); ?>>

    <!-- wrapper -->
    <div id="wrapper">

        <!-- setup vars -->
        <?php 
            if ( ! is_404() && ! is_search() ) { $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); }
            $abstract = get_option( 'refinery_styling' ); 
        ?>
        <!-- /setup vars --> 
        
        <?php if( !is_page_template('template-landingvideo.php') ) : ?>
            <?php if ( $abstract['background'] == "abstracton" ) : ?>
                <!-- background -->
                <div id="background-box"></div>
                <!-- /background -->
            <?php endif; ?>
        <?php endif; ?>

        <!-- nav -->
    	<nav id="primary" class="animated bounceInLeft">

	<?php if( !is_page_template('template-landingvideo.php') ) : ?>
            	<!-- logo -->
    		<div id="logo">
    		    <?php $logo = get_option( 'refinery_logo' ); if ( $logo['image'] ) : ?>
    		        <a href="<?php echo home_url(); ?>">
    		            <img src="<?php echo $logo['image']; ?>" alt="<?php esc_html_e( bloginfo( 'name' ) . bloginfo( 'description' ) ); ?>" />
    		        </a>
    		    <?php else : ?>
        			<a href="<?php echo home_url(); ?>">
        				<h1><?php esc_html_e( bloginfo('name') ); ?></h1>
        			</a>
                <?php endif; ?>
    		</div>
    		<!-- /logo -->

		<div style="position: fixed; top: 0px; left: 20px;">
        		<ul>
  				<li>
					<a target="_blank" href="https://www.facebook.com/Luluhairdo" id="social-facebook" title="Facebook">
						<img src="http://luluplews.com/social/facebook.png" width="25px" height="25px" />
					</a>
					<a target="_blank" href="http://open.spotify.com/user/luluyea" id="social-spotify" title="Spotify">
						<img src="http://luluplews.com/social/spotify.png" width="25px" height="25px" />
					</a>
					<a target="_blank" href="http://instagram.com/luluplews" id="social-instagram" title="Instagram">
						<img src="http://luluplews.com/social/instagram.png" width="25px" height="25px" />
					</a>
					<a target="_blank" href="https://www.linkedin.com/profile/view?id=117180579" id="social-pinterest" title="LinkedIn">
						<img src="http://luluplews.com/social/linkedin.png" width="25px" height="25px" />
					</a>
					<a target="_blank" href="http://www.pinterest.com/luluhairdo/" id="social-pinterest" title="Pinterest">
						<img src="http://luluplews.com/social/pinterest.png" width="25px" height="25px" />
					</a>
  					<a target="_blank" href="https://www.youtube.com/channel/UCzZoengEeLkocpDA_M9Q3DQ" id="social-youtube" title="Youtube">
						<img src="http://luluplews.com/social/youtube.png" width="25px" height="25px" />
					</a>
				</li>
			</ul>
  		</div>

	<?php endif; ?>

    		<?php if( !is_page_template('template-landingvideo.php') ) : ?>
    			<!-- menu -->
            		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'nav', 'theme_location' => 'primary_menu' ) ); ?>
            		<!-- /menu -->
		<?php endif; ?>
            
            <!-- filters -->
            <?php if ( is_page_template( 'template-portfolio.php' ) ) : ?>
                <div id="filters">
            		<?php  
                		$terms = get_terms("filter");
                        $count = count($terms);
                        echo '<nav id="filter"><ul class="nolist"><li class="filter"><a href="#">';
                        _e('Gallery Filter', 'refinery');
                        echo '</a><ul class="nolist"><li><a href="#" data-filter-value="*">All</a></li>';
                            if ( $count > 0 )
                            {
                                foreach ( $terms as $term ) 
                                {
                				    $termname = strtolower($term->name);
                				    $termname = str_replace(' ', '-', $termname);
                				    echo '<li><a href="#" data-filter-value=".'.$termname.'">'.$term->name.'</a></li>';
                				}
                			 }
                        echo '</ul></li></ul></nav>';
             		 ?>
            	</div>
            <?php endif; ?>
            <!-- /filters -->
            
<?php if( !is_page_template('template-landingvideo.php') ) : ?>
            <!-- social -->
            <?php //get_template_part('inc/social'); ?>

		

            <!-- /social -->
        <?php endif; ?>

        </nav>
        <!-- /nav -->
        
        
        
        <!-- content -->
        <div id="content">
            


            <?php if( !is_page_template('template-landingvideo.php') ) : ?>
                <!-- description -->
                <div id="description">
                   <p><?php echo bloginfo('description'); ?></p>
                </div>
                <!-- /description -->
            <?php endif; ?>
            
            <?php 
                if ( ! is_page_template('template-portfolio.php') && ! is_home() ) :
                    get_template_part('inc/title-tagline'); 
                endif;
            ?>