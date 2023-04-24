jQuery(document).ready(function () {
    // alert()
    jQuery('.my-slider').slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        arrows: true,
        
        dots: false,
        speed: 300,
        infinite: true,
        autoplaySpeed: 115000,
        autoplay: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                }
            }
        ]
    });
});

// $('.more-views-items').click(function(e){
// alert($(this).attr("img-div"))
// });




$(window).load(function() {
    $('#slider').flexslider({
    slideshow: true,
    animation: "fade",
    animationLoop: true,
    video: true,
    /* reload video on navigation */
    before: function(){ $('video').each( function() { $(this).get(0).load(); }); }
    });
    });
    
    function pauseslider() { $('#slider').flexslider("pause"); }
    function playslider() { $('#slider').flexslider("play"); }
    function resumeslider() { $('#slider').flexslider("next"); $('#slider').flexslider("play"); }