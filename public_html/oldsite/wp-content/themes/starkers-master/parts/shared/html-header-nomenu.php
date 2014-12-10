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
<script type="text/javascript">

var clicked = false;
var secondMovieHandler;
var secondMovieLength = 8000;

function bodyLoaded()
{
    if(navigator.userAgent.search("Chrome") >= 0)
    {
        if(navigator.userAgent.match(/Android/i))
        {
            var video = document.getElementsByTagName('video')[0];
            video.setAttribute('src', 'http://luluplews.com/landingvid/lulupt1encoded.mp4');
            video.setAttribute('width', '200px');
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
    document.location.href = 'http://luluplews.com/?page_id=2'; // RECENT WORK
}

</script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>-->
<script src="/wp-content/themes/starkers-master/js/menu.js"></script>
<!--<link rel="stylesheet" href="wp-content/themes/starkers-master/css/flexslider.css" type="text/css">

<script src="wp-content/themes/starkers-master/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider();

  });
</script>-->

<!-- /Javacript -->
		
<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?> onload="bodyLoaded()">
 
<div id="pageContent_wrapper">
	<div id="container">