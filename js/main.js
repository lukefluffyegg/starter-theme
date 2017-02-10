"use strict"

$(document).ready(function(){
   
    // On click opens/closes the nav menu
    $(".nav-toggle").click(function(e) {
        $(".nav-slide").toggleClass("nav-open");
        $(".overlay").toggleClass("overlay-show");
        $("body").toggleClass("modal-open");

        e.preventDefault();
   });

    // On ese it opens/closes the nav menu
    $(".nav-toggle").keyup(function(e) {
        if(e.keyCode == 27) {
            $(".nav-slide").toggleClass("nav-open");
            $(".overlay").toggleClass("overlay-show");

            e.preventDefault();
        }
    });

      // Initialzing the slick carousel
      $(".carousel").slick({
          dots: true,
          infinite: true,
          mobileFirst: true,
          autoplay: true,
          autoplaySpeed: 5000,
          speed: 500,
          fade: true,
          cssEase: 'linear'
      });

      // Opens up Content panel
      $(".content-panel-button").on('click', function(e) {
          e.preventDefault();
          $(".content-panel").addClass('is-visible');
          $(".content-slide-overlay").addClass("content-overlay-show");
          $("body").addClass("modal-open");
      });

      // Closes Content Panel
      $(".content-panel").on('click', function(e) {
          if($(e.target).is('.content-panel') || $(e.target).is('.content-panel-close')) {
            $('.content-panel').removeClass('is-visible');
            $(".content-slide-overlay").removeClass("content-overlay-show");
            $("body").removeClass("modal-open");
            e.preventDefault();
          }
      });


      var $win = $(window),
    wid = $win.width();
var $container = $('.content2')

if(wid < 405){ 
  // initialize Isotope
  $container.isotope({
    // options...
    resizable: false, // disable normal resizing
    // set columnWidth to a percentage of container width
    masonry: { columnWidth: $container.width() / 2 }
  });
}
else{
  $container.isotope({
    // options...
    resizable: false, // disable normal resizing
    // set columnWidth to a percentage of container width
    masonry: { columnWidth: 198 }
  });
}

// update columnWidth on window resize
$win.smartresize(function(){

  if($win.width() > 405){
     $container.isotope({
      // update columnWidth to a percentage of container width
      masonry: { columnWidth: 198 }
    });
  }
  else{
    $container.isotope({
      // update columnWidth to a percentage of container width
      masonry: { columnWidth: $container.width() / 2 }
    });
  }
});
         
});