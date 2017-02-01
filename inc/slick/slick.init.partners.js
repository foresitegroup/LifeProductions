$(document).ready(function(){
  $('.partner-images').slick({
    mobileFirst: true,
    appendArrows: $('.partner-images'),
    prevArrow: '<a href="#" class="slick-prev"><i class="fa fa-angle-left"></i></a>',
    nextArrow: '<a href="#" class="slick-next"><i class="fa fa-angle-right"></i></a>',
    slidesToShow: 2,
    slidesToScroll: 2,
    responsive: [
      {
        breakpoint: 600,
        settings: "unslick"
      }
    ]
  });
});