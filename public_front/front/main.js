$(document).ready(function(){
    $('.slider-one')
    .not('.slick-initialized')
    .slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        prevArrow: '.site-slider .slider-btn .prev',
        nextArrow: '.site-slider .slider-btn .next',
    });
  });