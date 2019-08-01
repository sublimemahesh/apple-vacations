$(document).ready(function () {

    jQuery('.tour').owlCarousel({
        autoplay: true,
        autoPlaySpeed: 1000,
        autoplayHoverPause: true,
        loop: true,
        margin: 15,
        dots: false,

        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            1024: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });

    jQuery('.excursion').owlCarousel({
        autoplay: true,
        autoPlaySpeed: 1000,
        autoplayHoverPause: true,
        loop: true,
        dots: false,
         margin: 15,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            1024: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });




});