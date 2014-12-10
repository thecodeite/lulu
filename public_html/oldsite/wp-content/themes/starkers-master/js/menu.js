$(function() {
	
	var menuopen = 0;
	
	$('.mobile-menu-icon').live('click', function() {
		if ( menuopen == 0 ) {
			$('.nav-main').slideDown(100);
			menuopen = 1;
		} else {
			$('.nav-main').slideUp(100);
			menuopen = 0;
		}
		return false;
	});


});
	
	


