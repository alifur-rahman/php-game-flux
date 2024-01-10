$(document).ready(function () {
    $(".back-to-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 800);
        return false;
    });

    // Show/hide dropdown on click
    $('.al_custom_dropdown').click(function () {
        $(this).toggleClass('al_active');
        // return false;
    });
    $('.al_custom_dropdown').hover(function () {
        if (!$(this).hasClass('al_active')) {
            $(this).addClass('al_active');
        }
        // return false;
    });

    // Hide dropdown when clicking outside of it
    $(document).on('click', function (e) {
        if (!$(e.target).closest('.al_custom_dropdown').length) {
            $('.al_custom_dropdown').removeClass('al_active');
        }
    });





});

$(window).on('load', function () {
    let sliderTimeout = 4000;
    let sliderCharacterSpeed = 1000;
    let sliderTextSpeed = 1200;
    let clonedTextSlider = $(".text-carousel").clone();


    $(".text-carousel").append(clonedTextSlider[0].innerHTML);
    setTimeout(function () {


        $(".character-carousel").owlCarousel({
            loop: true,
            nav: false,
            items: 1,
            autoplay: true,
            autoplaySpeed: sliderCharacterSpeed,
            autoplayTimeout: sliderTimeout,
            navSpeed: sliderCharacterSpeed,
            rtl: true,
            mouseDrag: false,
            touchDrag: false,
            pullDrag: false,
            dots: false
        });

        $(".text-carousel").owlCarousel({
            loop: true,
            nav: false,
            items: 1,
            autoplay: true,
            autoplaySpeed: sliderTextSpeed,
            navSpeed: sliderTextSpeed,
            autoplayTimeout: sliderTimeout,
            center: true,
            autoWidth: true,
            mouseDrag: false,
            touchDrag: false,
            pullDrag: false,
            dots: false
        });

    }, 500);


    // OWL Navigation
    $(".character-carousel .owl-prev").on("click", function (event) {
        $(".text-carousel").trigger("prev.owl.carousel", sliderTextSpeed);
    });

    $(".character-carousel .owl-next").on("click", function (event) {
        $(".text-carousel").trigger("next.owl.carousel", sliderTextSpeed);
    });

    // OWL autoplay
    $(".character-carousel").on("mouseover", function () {
        $(".character-carousel").trigger("stop.owl.autoplay");
        $(".text-carousel").trigger("stop.owl.autoplay");
    });

    $(".character-carousel").on("mouseout", function () {
        $(".character-carousel").trigger(
            "play.owl.autoplay",
            sliderTimeout,
            sliderCharacterSpeed
        );
        $(".text-carousel").trigger(
            "play.owl.autoplay",
            sliderTimeout,
            sliderTextSpeed
        );
    });
});

$(window).resize(function () {
    $(".character-carousel, .text-carousel").trigger("refresh.owl.carousel");
});
