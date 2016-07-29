function fixmenu() {
					var top = jQuery(document).scrollTop();
					if (top > 172) {
            			jQuery('#fixmenu').css({  visibility: 'visible',  opacity: '1'});
					}
					else {
            			jQuery('#fixmenu').css({    visibility: 'hidden',  opacity: '0' });
					};
};

jQuery(document).ready(function(){
    jQuery('.go-to').click( function(){
	      var scroll_el = $(this).attr('href');
        if ($(scroll_el).length != 0) {
	           jQuery('html, body').animate({ scrollTop: jQuery(scroll_el).offset().top }, 500);
        }
	      return false;
    });
});


jQuery(document).ready( function(){
    jQuery(window).scroll(fixmenu);
});
