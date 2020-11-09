$(document).ready(function(){

    //simple slider
    $('.gallery-single').slick({
        centerMode: true,
        dots: true,
    });

    // cleaner slider
    $('.fancy-slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: true,
        variableWidth: true
    });

    // used for the button trigger
    $("button").click(function(){
        $('#slider-view').toggleClass('hidden');
        $('#slider-view2').toggleClass('hidden');
        $('.btn').toggleClass('btn-primary');
        $('.btn').toggleClass('btn-dark');
    });

});