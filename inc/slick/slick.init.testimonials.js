$(document).ready(function(){
  $('.testimonials-slider').slick({
    arrows: false,
    dots: true,
    appendDots: $('.testimonials'),
    fade: true,
    autoplay: true,
    autoplaySpeed: 8000,
    speed: 1000
  });
});