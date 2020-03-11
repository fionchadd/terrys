jQuery(window).load(function() {
//slider for images
        jQuery('.flexslider.gallery').flexslider({
            animation: "fade",
           slideshow: true,
           slideshowSpeed: 5000,
              animationSpeed: 2000,
              animationLoop: true,
              controlNav: false,
              directionNav: false,	
          });
          var onResize = function() {
            //var docHeight = window.innerHeight;
            var docHeight = jQuery(window).outerHeight();
            jQuery('.col.site-body').css({'min-height': docHeight});
          };
          jQuery(window).on('resize', onResize);
          onResize();
        });
