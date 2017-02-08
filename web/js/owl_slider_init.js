// Cлайдеры

$(document).ready(function(){
    $(".main-banner-slider").owlCarousel({
        margin: 0,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        smartSpeed: 1000,
        slideBy: 2,
        nav: true,
        navText: "",
        responsive:{
            0: {
                items: 2
            },
            580:{
                items:3
            },
            992:{
                items:4
            }
        }
    });

    $(".item-slider").owlCarousel({
        margin: 40,
        loop: true,
        dots: false,
        nav: true,
        navText: "",
        responsive:{
            0: {
                items: 1
            },
            580:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

    $(".article-articles-slider").owlCarousel({
        margin: 55,
        loop: true,
        dots: false,
        nav: true,
        navText: "",
        responsive:{
            0: {
                items: 1
            },
            580:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

    $(".item-slider-more-goods").owlCarousel({
        margin: 30,
        loop: true,
        dots: false,
        nav: true,
        navText: "",
        responsive:{
            0: {
                items: 1
            },
            580:{
                items:2
            },
            860:{
                items:3
            },
            1200:{
                items:4
            }
        }
    });
});