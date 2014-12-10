<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width">

<!-- 
Website Designed & Developed By Edd Smith, Purple Claw.
www.purpleclaw.co.uk
edd@purpleclaw.co.uk

All code is clearly laid out, commented and elements are named relevantly. Any would be web developer
reading this should easily be able to follow the code which i have created. 
-->

<!-- Google Analytics Code -->

<!-- /Google Analytics Code -->


<!-- Scripts -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Lulu Plews</title>

<!-- /Scripts -->

<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
<link href="/wp-content/themes/starkers-master/style.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="" />
<![endif]-->
<!--Menu CSS File -->



<!-- Javacript -->

<!-- Place somewhere in the <head> of your document -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="/wp-content/themes/starkers-master/js/menu.js"></script>

<!--<link rel="stylesheet" href="wp-content/themes/starkers-master/css/flexslider.css" type="text/css">
<script src="wp-content/themes/starkers-master/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider();

  });
</script>-->

<script type="text/javascript" charset="utf-8">

function loadURL(url)
{
    document.location.href = url;
}

</script>

<!-- /Javacript -->
		
<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>


<!-- Left Hand Side Fixed Menu -->

	<div class="floating-logo" onclick="loadURL('http://luluplews.com')">
		<img class="logo" src="/wp-content/themes/starkers-master/images/lulu-logoi-01.png" width="180" height="250" alt="Lulu Plews Logo"/>
	</div> 
		
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		
		
		<ul class="footer-socials">
			<li><a class="social social-instagram" target="_blank" style="background: url(/wp-content/themes/starkers-master/images/instagram.png) no-repeat;" href="http://instagram.com/luluplews">instagram</a></li>
			<li><a class="social social-pinterest" target="_blank" style="background: url(/wp-content/themes/starkers-master/images/pinterest.png) no-repeat;" href="http://www.pinterest.com/luluhairdo/">Pinterest</a></li>
			<li><a class="social social-fb" target="_blank" style="background: url(/wp-content/themes/starkers-master/images/facebook.png) no-repeat;" href="https://www.facebook.com/Luluhairdo">Facebook</a></li>
			<li><a class="social social-vimeo" target="_blank" style="background: url(/wp-content/themes/starkers-master/images/vimeo.png) no-repeat;" href="">Vimeo</a></li>
		</ul>
		
		<p class="copyright">&copy; 2013 Lulu Plews</p>
		<p class="credit"><a href="http://www.awesomecreative.co.uk">Awesome Creative Web Design</a></p>
		
		

   
    
<!-- /Left Hand Side Fixed Menu -->

<!-- Mobile Menu -->
	
		
			<a class="mobile-menu-icon" href=""><img src="/wp-content/themes/starkers-master/images/mobile-menu-icon.gif" alt="Open Menu" width="38" height="28" /></a>
			<img class="Mobilelogo" src="/wp-content/themes/starkers-master/images/lulu-logoi-01.png" width="180" height="250" alt="Lulu Plews Logo"/> 
	
			<ul class="nav nav-pills pull-right nav-main">
				<?php wp_nav_menu( array('menu' => 'Mobile Menu' )); ?>
			</ul>
		
	
	         
	        
			
  

<!-- /Mobile Menu -->
 
<div id="pageContent_wrapper">
	<div id="container">