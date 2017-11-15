// Preloader 
jQuery(function (jQuery) {
    //Preloader
    var preloader = jQuery('.preloader');
    jQuery(window).load(function () {
        preloader.remove();
    });
});
// Wow 
wow = new WOW({
    boxClass: 'wow', // default
    animateClass: 'animated', // default
    offset: 0, // default
    mobile: false, // default
    live: true // default
})
wow.init();
// Bootstrap Slider 
jQuery('.carousel').carousel({
    interval: 20000
});
/**** owl carousel ****/
jQuery(document).ready(function () {
    var owl = jQuery("#testimonial-demo");
    owl.owlCarousel({
        itemsCustom: [
                [767, 1]
                , [992, 1]
                , [1200, 1]
                , [1500, 1]]
        , navigation: false
        , pagination: true
        , slideSpeed: 1000
        , scrollPerPage: true
        , autoPlay:true
    });
});

jQuery(document).ready(function () {
    var owl = jQuery("#work-demo");
    owl.owlCarousel({
        itemsCustom: [
                [767, 6]
                , [992, 6]
                , [1200, 6]
                , [1500, 6]]
        , navigation: true
        , pagination: false
        , slideSpeed: 1000
        , scrollPerPage: true
        , autoPlay:true
        , loop:true
    });
});
/**** Fancy box ****/

jQuery(document).ready(function() {
		jQuery(".fancybox").fancybox({
            openEffect	: 'none',
		closeEffect	: 'none'
        })
	});
/**** Portfolio Effect ****/
	jQuery(function() {
			
				jQuery(' #portfolio-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
/**** ****/


        jQuery('.contact_form select').change(function () {
            if (jQuery(this).children('option:first-child').is(':selected')) {
                jQuery(this).addClass('placeholder1');
            }
            else {
                jQuery(this).removeClass('placeholder1');
            }
        });



