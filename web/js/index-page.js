let bannerInit = function(){

    let sliderBanner = $(".section-what .slider"),
        sliderItems = $(".section-what .slider .items").length;

    if(sliderBanner.length > 0) {
        let loopV = (sliderItems > 1);

        sliderBanner.owlCarousel({
            lazyLoad: true,
            slideSpeed: 200,
            navRewind: false,
            autoplay:false,
            autoplayTimeout: 10000,
            margin:0,
            items:1,
            smartSpeed:450,
            slideTransition:'ease',
            center: false,
            loop:loopV,
            nav: true,
            dots:true,
            mouseDrag: false,
            touchDrag: true,
            navText: false,
            responsive: {
                0: {
                    autoHeight: true
                },
                768: {
                    autoHeight: false
                }
            }
        }).on('changed.owl.carousel', function (e) {

        }).on('translated.owl.carousel', function (e) {

        });

        function sliderNav(){
            $(".section-what__line--left").click(function(e) {
                e.preventDefault();
                sliderBanner.trigger("prev.owl.carousel");
            });
            $(".section-what__line--right").click(function(e) {
                e.preventDefault();
                sliderBanner.trigger("next.owl.carousel");
            });
        }

        function arrowsVisibility() {
            if(sliderItems < 2) {
                $(".section-banner__line").hide();
            } else if (sliderItems >= 2) {
                $(".section-banner__line").show();
            }
        };

        sliderNav();
        arrowsVisibility();
    };
};


$(document).ready(function() {

    document.querySelector("body").classList.add("main-page");
    bannerInit();

    $(window).resize(function(){

    });
});