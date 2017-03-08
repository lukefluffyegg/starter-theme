"use strict"

$(document).ready(function(){
    // Initialzing the slick slider
    // Just Add the sliders div class or id.
    $(".classOrDivHere").slick({
      dots: true,
      infinite: true,
      mobileFirst: true,
      autoplay: true,
      autoplaySpeed: 5000,
      speed: 500,
      fade: true,
      cssEase: 'linear'
    });
});