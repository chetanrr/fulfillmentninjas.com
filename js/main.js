/*
$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $("#header").addClass("header-scrolled");
        $(".logo img").attr("src", "assets/img/logo.png");
    } else {
        $("#header").removeClass("header-scrolled");
        $(".logo img").attr("src", "assets/img/logo-white.png");
    }
});

if ($(window).scrollTop() > 100) {
    $("#header").addClass("header-scrolled");
    $(".logo img").attr("src", "assets/img/logo.png");
}
*/


$(document).ready(function(){
    $('.testimonials').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        cssEase: 'ease'
    });

    $('.customer-review-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        cssEase: 'ease'
    });
});