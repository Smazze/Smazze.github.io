var inOut = function(fn){
	var overlay = $('#touch-overlay');
	overlay.fadeIn(2000, function(){
		setTimeout(function(){
		    overlay.animate({ left: -overlay.outerWidth()});
		},2000);
	});
}
$(function(){
	new PAYPAL.Marketing.Carousel('#get-started-carousel');
    		
    if($('html').attr('data-device-type') == 'mobile'){
        $('#body').append('<img src="https://www.paypalobjects.com/webstatic/mktg/icon/swipe-left.png" id="touch-overlay" alt="Touch Overlay" title="Touch Overlay"/>');
        setTimeout(inOut, 500);
    }      
});
//Equal height for multiple elements function
    $.fn.equalHeightEle = function(minHeight, maxHeight, breakPoint){
        var items = this;
        breakPoint = breakPoint || 0;
        jQuery(window).bind('load orientationchange resize', function() {
            tallest = (minHeight) ? minHeight : 0;
            items.each(function() {
                jQuery(this).outerHeight('auto');
                if(jQuery(this).outerHeight() > tallest) {
                    tallest = jQuery(this).outerHeight();
                }
            });
            var e = window;
            a = 'inner';
            if (!('innerWidth' in window )) {
                a = 'client';
                e = document.documentElement || document.body;
            }
            width = e[ a+'Width' ];
            if ( width >= breakPoint ) {
                if((maxHeight) && tallest > maxHeight) tallest = maxHeight;
                return items.each(function() {
                    jQuery(this).outerHeight(tallest);
                });
            }
        });
    }
    $('#get-started-carousel .get-started-panel h4').equalHeightEle();
    $('#get-started-carousel .get-started-panel p').equalHeightEle();
    $('#get-started-carousel .get-started-panel ul').equalHeightEle();

$(document).ready(function() {
    /*Intent: send ?returnUrl to Tesla and Falcon app*/
    if (window.location.href.indexOf('returnUrl=') > 0) {
    //check to see if the url have the right querystring

        //tesla: toggle show/hide for form if there is "returnUrl" or just a signup link
        $('.signup-mode > div').toggle();

        //falcon: append query string to link
        $('.get-started-panel').each(function(){
            var btn = $(this).find('a.btn'),
                btnUrl = btn.attr('href'),
                ampsOrQm = (btnUrl.indexOf("?") >= 0 ? "&" : "?");

            btn.attr('href', btnUrl + ampsOrQm + 'returnUrl=' + encodeURIComponent(returnUrl) + '&final=1');           
        });
    }
});    

