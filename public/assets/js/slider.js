/*
Template: noteplus - Responsive Bootstrap 4 Admin Dashboard Template
Author: iqonicthemes.in
Design and Developed by: iqonicthemes.in
NOTE: This file contains the styling for Slider in Template.
*/


jQuery(document).ready(function() {
  if(typeof $.fn.slick !== typeof undefined){
    /*---------------------------------------------------------------------
      slick
      -----------------------------------------------------------------------*/

    jQuery('#client-slider').slick({
      dots: false,
      arrows: false,
      infinite: true,
      speed: 300,
      centerMode: false,
      autoplay: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

  }
});
