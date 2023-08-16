jQuery(document).ready(function ($) {

    jQuery("#testimonial-slider").owlCarousel({
        autoPlay: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true
    });

    jQuery("#blog-slider").owlCarousel({
        autoPlay: true,
        items: 2,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [768, 2],
        itemsMobile: [600, 1]
    });

    $(".arrow").on("click", function () {
        $("html, body").animate({scrollTop: jQuery("#myId").offset().top - 200}, 1e3);

    });


});
jQuery(window).scroll(function () {
    if (jQuery(document).width() > 980) {
        if (jQuery(window).scrollTop()) {
            jQuery(".top-header").css({'padding': '15px 0', 'position': 'fixed', 'top': '0px', 'transition': 'all 0.5s ease-out 0s'});
            jQuery(".main-header .top-header").css({background: '#212121'});
        }
        else {
            jQuery(".main-header .top-header").css({'padding': '10px 0', background: 'rgba(0, 0, 0, 0) none repeat scroll 0 0', 'position': 'relative', 'transition': 'all 0.5s ease-out 0s'});

            if (!(jQuery('body > header > div').hasClass('main-header')))
            {
                jQuery(".top-header").css({'padding': '10px 0', 'position': 'relative', 'top': '0', 'transition': 'all 0.5s ease-out 0s'});
                jQuery('body > section').css({'margin-top':'0px', 'transition': 'all 0.5s ease-out 0s'});
            }

        }
    }

});



