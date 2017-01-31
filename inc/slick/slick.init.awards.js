$(document).ready(function(){
  $('.awards').slick({
    mobileFirst: true,
    appendArrows: $('.awards'),
    prevArrow: '<a href="#" class="slick-prev"><i class="fa fa-angle-left"></i></a>',
    nextArrow: '<a href="#" class="slick-next"><i class="fa fa-angle-right"></i></a>',
    responsive: [
      {
        breakpoint: 600,
        settings: "unslick"
      }
    ]
  });
});