function main() {

  (function () {
    'use strict';

    $('a.page-scroll').click(function () {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 50
          }, 900);
          return false;
        }
      }
    });


    $('body').scrollspy({
      target: '.navbar-default',
      offset: 80
    });

    // Hide nav on click
    $(".navbar-nav li a").click(function (event) {
      // check if window is small enough so dropdown is created
      var toggle = $(".navbar-toggle").is(":visible");
      if (toggle) {
        $(".navbar-collapse").collapse('hide');
      }
    });


    // Nivo Lightbox 
    $('.portfolio-item a').nivoLightbox({
      effect: 'slideDown',
      keyboardNav: true,
    });


    /*====================================
    CounterUp
    ======================================*/

    $(document).ready(function ($) {
      if ($("span.count").length > 0) {
        $('span.count').counterUp({
          delay: 10, // the delay time in ms
          time: 1000 // the speed time in ms
        });
      }
    });

  }());


}
main();