(function($) {
    "use strict";
    
    // select text inputs
    $('input[type=text], textarea').focus(function() {
        $(this).select();
    });
    
    // set default search text
    $( '#searchform input[type=text]' ).attr("placeholder", "Type and hit enter...");
    
    // primary drop menu
    $("#primary li").hover(function() {
          $(this).find('ul:first').stop(true, true).animate({
                height: ['toggle', 'swing'],
                opacity: 'toggle'
          }, 300, 'linear');
    });
    
    // Select menu for smaller screens
    $("<select />").appendTo("nav#primary");
    
    // Create default option "Menu"
    $("<option />", {
       "selected": "selected",
       "value"   : "",
       "text"    : "Navigation"
    }).appendTo("nav select");
    
    // Populate dropdown with menu items
    $("nav#primary a").each(function(){
     var el = $(this);
     $("<option />", {
         "value"   : el.attr("href"),
         "text"    : el.text()
     }).appendTo("nav#primary select");
    });
    
    $("nav#primary select").change(function(){
        window.location = $(this).find("option:selected").val();
    });
    
    // aside
    $('#tab').toggle(
        function() 
        {
            $('#aside').css('right', '0')
        }, function() 
        {
            $('#aside').css('right', '-230px')
        }
    );
    
    // pretty photo
    $("a[rel^='prettyPhoto']").prettyPhoto({
        animation_speed: 'normal',
        slideshow: 4000,
        autoplay_slideshow: false,
        opacity: 0.9,
        show_title: false,
        allow_resize: true,
        default_width: 800,
        default_height: 600,
        counter_separator_label: '/',
        theme: 'pp_default',
        horizontal_padding: 20,
        hideflash: false,
        wmode: 'opaque',
        autoplay: true,
        modal: false,
        deeplinking: true,
        overlay_gallery: false,
        keyboard_shortcuts: true,
        ie6_fallback: true,
    });
    
    // blog masonry
    var $container = $('#articles .masonry');
    $container.isotope({
        itemSelector: '.post',
        layoutMode: 'masonry'
    });
    
    // portfolio hovers    
    $('#portfolio li').hover( function()
    {
        $(this).find('.magnify').stop(true, true).animate({
            opacity: 'toggle'
        }, 500, 'linear');
    });
    
    // portfolio filter
    var $container = $('#portfolio ul');
    
    $container.imagesLoaded( function(){
        $container.isotope({
            itemSelector: '.item',
            layoutMode: 'masonry'
        });
    });

    // bind filter button click
    $('#filters a').click(function(){
        var selector = $(this).attr('data-filter-value');
        $container.isotope({ filter: selector });
    });
    
    // prettyprint
    $('pre').addClass('prettyprint');

	// uniform
	$("select, input:checkbox, input:radio, input:file").uniform();
	
	// validate forms
	$("#contact_form").validate();

})(jQuery);