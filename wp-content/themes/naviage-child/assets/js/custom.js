// add class on scroll to header
jQuery(document).ready(function(){
    jQuery(document).on("scroll", function() {
        if (jQuery(this).scrollTop() > 10) {
            jQuery("header").addClass("grow");
        } else {
            jQuery("header").removeClass("grow");
        }
    });
    
    new WOW().init();
    
})
